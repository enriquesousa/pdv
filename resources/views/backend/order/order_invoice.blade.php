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
                <div><span>TELÉFONO</span> {{ $order->customer->phone }}</div>
                <div><span>COMPAÑÍA</span> {{ $order->customer->shopname }}</div>
                <div><a href="mailto:{{ $order->customer->email }}" target="_blank">{{ $order->customer->email }}</a></div>
            </div>

            <div id="project" class="column">
                <div><span>RECIBO #</span> {{ $order->invoice_no }}</div>
                <div><span>FECHA</span> {{ $order->order_date }}</div>
                <div><span>ESTATUS</span> {{ $order->order_status }}</a></div>
            </div>

            @php
                $floatVar_Pago =  floatval($order->pay); 
                $floatVar_Pendiente =  floatval($order->due); 
            @endphp
            <div id="project" class="column">
                <div><span>FORMA DE PAGO</span> {{ $order->payment_status }}</div>
                <div><span>ABONO</span> $ @convert($floatVar_Pago)</div>
                <div><span>PENDIENTE</span> $ @convert($floatVar_Pendiente)</div>
            </div>

            <div id="project" class="column">
                {{-- <div><span>CLIENTE</span></div> --}}
            </div>

            <div id="company" class="column">
                <div>PDV EsWeb</div>
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
                    <th class="service">IMAGEN</th>
                    <th class="desc" style="width: 150px;">DESCRIPCIÓN</th>
                    <th>CÓDIGO</th>
                    <th>PRECIO</th>
                    <th>CANTIDAD</th>
                    <th>TOTAL</th>
                </tr>
            </thead>

            <tbody>

                @foreach ($orderItem as $item)
                    <tr>

                        {{-- Imagen --}}
                        <td class="service" align="center">
                            <img src="{{ public_path($item->product->product_image) }}" style="width: 50px; height: 40px;">
                        </td>

                        {{-- Product Name --}}
                        <td class="desc">
                            {{ mb_strimwidth($item->product->product_name, 0, 60, '...') }}
                        </td>

                        {{-- Product Code --}}
                        <td class="service">{{ $item->product->product_code }}</td>

                        {{-- Precio --}}
                        @php
                            $floatvar =  floatval($item->product->selling_price); 
                        @endphp
                        <td class="unit">$ @convert($floatvar)</td>

                        {{-- Cantidad --}}
                        <td class="qty">{{ $item->quantity }}</td>

                        {{-- Total --}}
                        @php
                            $floatvar =  floatval($item->total); 
                        @endphp
                        <td class="total">$ @convert($floatvar)</td>

                    </tr>
                @endforeach

            </tbody>

        </table>

        {{-- SUBTOTAL, IVA y TOTAL --}}
        @php
            $floatVar_Subtotal =  floatval($order->sub_total); 
            $floatVar_Iva =  floatval($order->iva);
            $floatVar_Total =  floatval($order->total);
        @endphp

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
                    <td colspan="4">TOTAL</td>
                    <td id="project">
                        <div><span>SUBTOTAL</span> $ @convert($floatVar_Subtotal)</div>
                        <div><span>IVA 15%</span> $ @convert($floatVar_Iva)</div>
                        <div><span>TOTAL</span> $ @convert($floatVar_Total)</div>    
                    </td>
                </tr>
            </tbody>
        </table>

        <div id="notices">
            <div>NOTA:</div>
            <div class="notice">Se aplicará un cargo financiero del 1,5% sobre los saldos impagos después de 30 días.</div>
        </div>

    </main>

    <br>

    <div class="row">
        <div id="company" class="">
            <p>-----------------------------------</p>
            <h5>Firma de Autorización</h5>
        </div>
    </div>

    <footer>
        La factura se creó en una computadora y NO es válida sin firma ni sello.
    </footer>

</body>

</html>
