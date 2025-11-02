<?php

namespace App\Http\Controllers;

use App\Http\Requests\InvoiceRequest;
use App\Mail\InvoiceMail;
use App\Models\Customer;
use App\Models\Invoice;
use App\Models\Product;
use Illuminate\Support\Facades\Mail;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $invoices = Invoice::with('customer', 'product')->latest()->paginate(10);

        return view('invoices.index', compact('invoices'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $customers = Customer::all();
        $products = Product::all();
        
        return view('invoices.create', compact('customers', 'products'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(InvoiceRequest $request)
    {
        $data = $request->validated();

        $customer = Customer::findOrFail($data['customer_id']);

        $product = Product::findOrFail($data['product_id']);
        $data['total_amount'] = $product->price * $data['quantity'];
        
        $invoice = Invoice::create($data);

        Mail::to($customer->email)->send(new InvoiceMail($invoice));

        return redirect()->route('invoices.index')->with('success', 'Invoice created successfully and email send to the customer');
    }

    /**
     * Display the specified resource.
     */
    public function show(Invoice $invoice)
    {
        $invoice->load(['customer', 'product']);

        return view('invoices.show', compact('invoice'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Invoice $invoice)
    {   
        $customers = Customer::all();
        $products = Product::all();

        return view('invoices.edit', compact('invoice', 'customers', 'products'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(InvoiceRequest $request, Invoice $invoice)
    {
        $data = $request->validated();

        $product = Product::findOrFail($data['product_id']);
        $data['total_amount'] = $product->price * $data['quantity'];

        $invoice->update($data);

        return redirect()->route('invoices.index')->with('success', 'Invoice has been updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Invoice $invoice)
    {
        $invoice->delete();

        return redirect()->route('invoices.index')->with('success', 'Invoice has been deleted successfully.');
    }
}
