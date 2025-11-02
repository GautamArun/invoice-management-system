<x-mail::message>

<x-slot name="header">

</x-slot>

# Invoice #{{ $invoice->id }}

Hi **{{ $invoice->customer->name }}**,

We have mentioned the Invoice Details below:

---

## Invoice Summary 

**Product:** {{ $invoice->product->name }}

**Quantity:** {{ $invoice->quantity }}

**Per Unit Price:** {{ $invoice->product->price }}

**Total Price INR:** {{ $invoice->total_amount }}

**Invoice Date:** {{ $invoice->invoice_date }}

**Due Date:** {{ $invoice->due_date }}


Thank you for ordering.
</x-mail::message>
