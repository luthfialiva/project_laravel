
<link href="{{ asset('/css/reminder.css') }}" rel="stylesheet" type="text/css"/>
<script src="{{ asset('/js/reminder.js') }}" type="text/javascript"></script>
<?php
$cek = \App\Doc::latest('warn_date')
        ->where('warn_date', '<=', Carbon\Carbon::now())
        ->where('ket', '=', '1')
        ->get();
?>
@if($cek->count() > 0)
<div id="gb">
    <div class="gbcontent">
        <div style="text-align:right"></div><center>
            <a href="javascript:showHideGB()" title="Close">&bigotimes; Close</a>

            <div style="text-align:center; font-size: 20px; color: red;">* Periode Kategori Berakhir !!!</div>
            <div style='overflow-y:scroll; width:655px;height:200px;padding:2px;scroll-color:hidden;'>
                <table id="box-table-r">
                    <thead>
                    <tr>
                        <td rowspan="2"><div align="center"><strong>No</strong></div></td>
                        <td rowspan="2"><div align="center"><strong>Nama Dokumen</strong></div></td>
                        <td rowspan="2"><div align="center"><strong>No Dokumen</strong></div></td>
                        <td rowspan="2"><div align="center"><strong>Kategori</strong></div></td>
                        <td rowspan="2"><div align="center"><strong>Bidang</strong></div></td>
                        <td colspan="2"><div align="center"><strong>Validasi</strong></div></td>
                        <td rowspan="2"><div align="center"><strong>Keterangan</strong></div></td>
                        <td rowspan="2"><div align="center"><strong>Action</strong></div></td>
                    </tr>
                    <tr>
                        <td><div align="center"><strong>Mulai</strong></div></td>
                        <td><div align="center"><strong>Selesai</strong></div></td>
                    </tr>
                    </thead>
                    <tbody>

                    <?php
                    $docs = \App\Doc::latest('warn_date')
                            ->where('warn_date', '<=', Carbon\Carbon::now())
                            ->where('ket', '=', '1')
                            ->get();
                    $no=0;
                    $no=$no+1;
                    if ($no%2==1){
                        $warna="#9DFF98";
                    }else {
                        $warna="#5DfF98";
                    }
                    ?>
                    @for($i = 0; $i < count($docs); $i++)
                    <tr style="background-color:<?php echo $warna ; ?>">
                        <td><div align="center">{{$i+1}}</div></td>
                        <td><div align="left">{{ $docs[$i]->nama_doc }}</div></td>
                        <td><div align="left">{{ $docs[$i]->id_doc }}</div></td>
                        <td><div align="left">{{ App\Kategori::find($docs[$i]->id_kategori)->nama_kategori }}</div></td>
                        <td><div align="left">{{ App\Bidang::find($docs[$i]->id_bidang)->nama_bidang }}</div></td>
                        <td><div align="center"><strong>{{ $docs[$i]->start_date }}</strong></div></td>
                        <td><div align="center" style="text-alxign:center; color: red;"><strong>{{ $docs[$i]->untill_date }}</strong></div></td>
                        <td><div align="center">{{ $docs[$i]->remarks }}</div></td>
                        @if(Auth::User()->role == 1)
                            <td><div align="center"><a href="{{route('remind.show', ['id' => $docs[$i]->id])}}">Reminded</a></div></td>
                        @elseif(Auth::User()->role == 2)
                            <td><div align="center">Silahkan Hubungi Administrator</div></td>
                        @else
                            <td><div align="center">Silahkan Hubungi Administrator</div></td>
                        @endif
                    </tr>
                    @endfor
                    </tbody>
                </table>
            </div>
            <div style="padding:5px"></div>
    </div>
</div>
    @else
@endif