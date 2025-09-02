<?php
// Declaration
enum InvoiceStatus
{
    case Sent;
    case Paid;
    case Cancelled;
}

// The enum can then be use as a type
function printInvoiceStatus(InvoiceStatus $status)
{
    print($status->name);
}

printInvoiceStatus(InvoiceStatus::Sent);
// Sent
