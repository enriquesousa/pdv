<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Recibo</title>

    <link href="{{ asset('backend/assets/css/estilo_pdf.css') }}" rel="stylesheet" type="text/css" media="all" />

</head>

<body>

    <header class="clearfix">

        <div id="logo">
            <img src="{{ asset('backend/assets/images/logo-dark2.png') }}">
        </div>

        <h1>RECIBO #{{ $order->invoice_no }}</h1>

        <div class="row">

            <div id="project" class="column">
                <div><span>CLIENTE</span> {{ $order->customer->name }}</div>
                <div><span>DIRECCIÓN</span> {{ $order->customer->address }}</div>
                <div><span>CORREO</span> <a href="mailto:{{ $order->customer->name }}">{{ $order->customer->name }}</a></div>
                <div><span>TELÉFONO</span> {{ $order->customer->phone }}</div>
                <div><span>COMPAÑÍA</span> {{ $order->customer->shopname }}</div>
            </div>

            <div id="project" class="column">
                <div><span>RECIBO #</span> {{ $order->invoice_no }}</div>
                <div><span>FECHA</span> {{ $order->order_date }}</div>
                <div><span>ESTATUS</span> {{ $order->order_status }}</a></div>
            </div>

            <div id="project" class="column">
                <div><span>PAGO</span> {{ $order->payment_status }}</div>
                <div><span>TOTAL</span> {{ $order->pay }}</div>
                <div><span>PENDIENTE</span> {{ $order->due }}</div>
            </div>

            <div id="project" class="column">
                {{-- <div><span>CLIENTE</span></div> --}}
            </div>

            <div id="company" class="column">
                <div>EsWeb</div>
                <div>455 Foggy Heights,<br /> AZ 85004, US</div>
                <div>(602) 519-0450</div>
                <div><a href="mailto:company@example.com">esweb@example.com</a></div>
            </div>

        </div>

    </header>


    <main>
        <table>

            <thead>
                <tr>
                    <th class="service">SERVICE</th>
                    <th class="desc">DESCRIPTION</th>
                    <th>PRICE</th>
                    <th>QTY</th>
                    <th>TOTAL</th>
                </tr>
            </thead>

            <tbody>

                @foreach ($orderItem as $item)
                    <tr>
                        <td class="service">Design</td>
                        <td class="desc">Creating a recognizable design solution based on the company's existing visual
                            identity</td>
                        <td class="unit">$40.00</td>
                        <td class="qty">26</td>
                        <td class="total">$1,040.00</td>
                    </tr>
                @endforeach

            </tbody>

        </table>

        {{-- SUBTOTAL, IVA y TOTAL --}}
        <br>

        <table>
            <tbody>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td colspan="4">SUBTOTAL</td>
                    <td class="total">$5,200.00</td>
                </tr>
            </tbody>
        </table>

        <table>
            <tbody>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td colspan="4">TAX 25%</td>
                    <td class="total">$1,300.00</td>
                </tr>
            </tbody>
        </table>

        <table>
            <tbody>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td colspan="4" class="grand total">GRAND TOTAL</td>
                    <td class="grand total">$6,500.00</td>
                </tr>
            </tbody>
        </table>




        <div id="notices">
            <div>NOTICE:</div>
            <div class="notice">A finance charge of 1.5% will be made on unpaid balances after 30 days.</div>
        </div>

    </main>


    <footer>
        Invoice was created on a computer and is valid without the signature and seal.
    </footer>

</body>

</html>
