<tr>
    <td style="padding:0cm 0cm 0cm 0cm">
        <table border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100.0%;border-collapse:collapse">
            <tbody>
                <tr>
                    <td style="padding:0cm 0cm 0cm 0cm">
                        <table border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100.0%;border-collapse:collapse">
                            <tbody>
                                <tr>
                                    <td width="80%" valign="top" style="width:80.0%;background:#172e4d;padding:7.5pt 7.5pt 7.5pt 7.5pt">
                                        <table border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100.0%;border-collapse:collapse">
                                            <tbody>
                                                <tr>
                                                    <td valign="top" style="background:#172e4d;padding:0cm 0cm 0cm 0cm">
                                                        <p class="MsoNormal" style="line-height:14.25pt"><b><span style="font-family:&quot;Arial&quot;,sans-serif;color:white">{{ $segment['carrierCode'] }} {{ $segment['number'] }}<u></u><u></u></span></b></p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="background:#172e4d; padding-top: 10px;">
                                                        <p class="MsoNormal" style="line-height:12.75pt">
                                                            <span style="font-size:10.5pt;font-family:&quot;Arial&quot;,sans-serif;color:white">
                                                                {{ $summary['response']['dictionaries']['carriers'][$segment['carrierCode']] }}
                                                            </span>
                                                        </p>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                    <td width="20%" valign="top" style="width:20.0%;background:#172e4d;padding:7.5pt 7.5pt 7.5pt 7.5pt"></td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td style="padding:0cm 0cm 0cm 0cm">
                        <table border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100.0%;border-collapse:collapse">
                            <tbody>
                                <tr>
                                    <td width="50%" valign="top" style="width:50.0%;border:solid #e0e0e0 1.0pt;padding:7.5pt 7.5pt 7.5pt 7.5pt">
                                        <table border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100.0%;border-collapse:collapse">
                                            <tbody>
                                                <tr>
                                                    <td style="padding:0cm 0cm 0cm 0cm">
                                                        <p class="MsoNormal" style="line-height:16.5pt"><span style="font-size:10.5pt;font-family:&quot;Arial&quot;,sans-serif;color:#666666">{{ \Carbon\Carbon::create($segment['departure']['at'])->format('d M Y') }}<u></u><u></u></span></p>
                                                    </td>
                                                </tr>
                                                <tr style="height:3.75pt">
                                                    <td width="100%" nowrap="" valign="top" style="width:100.0%;padding:0cm 0cm 0cm 0cm;height:3.75pt"></td>
                                                </tr>
                                                <tr>
                                                    <td style="padding:0cm 0cm 0cm 0cm">
                                                        <p class="MsoNormal"><span style="font-size:15.0pt;font-family:&quot;Arial&quot;,sans-serif;color:#172e4d">{{ \Carbon\Carbon::create($segment['departure']['at'])->format('H:i') }}<u></u><u></u></span></p>
                                                    </td>
                                                </tr>
                                                <tr style="height:7.5pt">
                                                    <td width="100%" nowrap="" valign="top" style="width:100.0%;padding:0cm 0cm 0cm 0cm;height:7.5pt"></td>
                                                </tr>
                                                <tr>
                                                    <td style="padding:0cm 0cm 0cm 0cm">
                                                        <p class="MsoNormal"><b><span style="font-size:10.5pt;font-family:&quot;Arial&quot;,sans-serif;color:#666666">{{ $segment['departure']['iataCode'] }}<u></u><u></u></span></b></p>
                                                    </td>
                                                </tr>
                                                <!-- <tr>
                                                    <td style="padding:0cm 0cm 0cm 0cm">
                                                        <p class="MsoNormal" style="line-height:16.5pt"><span style="font-size:10.5pt;font-family:&quot;Arial&quot;,sans-serif;color:#666666">Terminal B<u></u><u></u></span></p>
                                                    </td>
                                                </tr> -->
                                            </tbody>
                                        </table>
                                    </td>
                                    <td width="50%" valign="top" style="width:50.0%;border:solid #e0e0e0 1.0pt;border-left:none;padding:7.5pt 7.5pt 7.5pt 7.5pt">
                                        <table border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100.0%;border-collapse:collapse">
                                            <tbody>
                                                <tr>
                                                    <td style="padding:0cm 0cm 0cm 0cm">
                                                        <p class="MsoNormal" style="line-height:16.5pt"><span style="font-size:10.5pt;font-family:&quot;Arial&quot;,sans-serif;color:#666666">{{ \Carbon\Carbon::create($segment['arrival']['at'])->format('d M Y') }}<u></u><u></u></span></p>
                                                    </td>
                                                </tr>
                                                <tr style="height:3.75pt">
                                                    <td width="100%" nowrap="" valign="top" style="width:100.0%;padding:0cm 0cm 0cm 0cm;height:3.75pt"></td>
                                                </tr>
                                                <tr>
                                                    <td style="padding:0cm 0cm 0cm 0cm">
                                                        <p class="MsoNormal">
                                                            <span style="font-size:15.0pt;font-family:&quot;Arial&quot;,sans-serif;color:#172e4d">
                                                                {{ \Carbon\Carbon::create($segment['arrival']['at'])->format('H:i') }}
                                                            </span>
                                                        </p>
                                                    </td>
                                                </tr>
                                                <tr style="height:7.5pt">
                                                    <td width="100%" nowrap="" valign="top" style="width:100.0%;padding:0cm 0cm 0cm 0cm;height:7.5pt"></td>
                                                </tr>
                                                <tr>
                                                    <td style="padding:0cm 0cm 0cm 0cm">
                                                        <p class="MsoNormal"><b><span style="font-size:10.5pt;font-family:&quot;Arial&quot;,sans-serif;color:#666666">{{ $segment['arrival']['iataCode'] }}<u></u><u></u></span></b></p>
                                                    </td>
                                                </tr>
                                                <!-- <tr>
                                                    <td style="padding:0cm 0cm 0cm 0cm">
                                                        <p class="MsoNormal" style="line-height:16.5pt"><span style="font-size:10.5pt;font-family:&quot;Arial&quot;,sans-serif;color:#666666">Terminal 5<u></u><u></u></span></p>
                                                    </td>
                                                </tr> -->
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
    </td>
    <td style="padding:0cm 0cm 0cm 0cm"></td>
</tr>

<tr style="height:3.0pt">
    <td width="580" nowrap="" valign="top" style="width:435.0pt;background:#e0e0e0;padding:0cm 0cm 0cm 0cm;height:3.0pt"></td>
    <td style="padding:0cm 0cm 0cm 0cm;height:3.0pt"></td>
</tr>

<tr style="height:11.25pt">
    <td width="100%" nowrap="" valign="top" style="width:100.0%;padding:0cm 0cm 0cm 0cm;height:11.25pt"></td>
    <td style="padding:0cm 0cm 0cm 0cm;height:11.25pt"></td>
</tr>
