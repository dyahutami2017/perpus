@section('js')
<script type="text/javascript">
  $(document).ready(function() {
    $('#table').DataTable({
      "iDisplayLength": 50
    });

} );
</script>
@stop
@extends('layouts.app')

@section('content')
<div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                      <i class="mdi mdi-book text-success icon-lg" style="width: 40px;height: 40px;"></i>
                    </div>
                    <div class="float-right">
                      <p class="mb-0 text-right">Buku</p>
                      <div class="fluid-container">
                        <h3 class="font-weight-medium text-right mb-0">{{$buku->count()}}</h3>
                      </div>
                    </div>
                  </div>
                  <p class="text-muted mt-3 mb-0">
                    <i class="mdi mdi-book mr-1" aria-hidden="true"></i> Total judul buku
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                      <i class="mdi mdi-account-location text-info icon-lg"></i>
                    </div>
                    <div class="float-right">
                      <p class="mb-0 text-right">Anggota</p>
                      <div class="fluid-container">
                        <h3 class="font-weight-medium text-right mb-0">{{$anggota->count()}}</h3>
                      </div>
                    </div>
                  </div>
                  <p class="text-muted mt-3 mb-0">
                    <i class="mdi mdi-account mr-1" aria-hidden="true"></i> Total seluruh anggota
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <div class="container bg-white">
                <canvas id="myChart" height="300" width="500"></canvas>
              </div>
            </div>
</div>
<!-- <div class="row" >
  <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">

                <div class="card-body">
                  <h4 class="card-title">Data Transaksi sedang pinjam</h4>
                  
                  <div class="table-responsive">
                    <table class="table table-striped" id="table">
                      <thead>
                        <tr>
                          <th>
                            Kode
                          </th>
                          <th>
                            Buku
                          </th>
                          <th>
                            Peminjam
                          </th>
                          <th>
                            Tgl Pinjam
                          </th>
                          <th>
                            Tgl Kembali
                          </th>
                          <th>
                            Status
                          </th>
                          <th>
                            Action
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($datas as $data)
                        <tr>
                          <td class="py-1">
                          <a href="{{route('transaksi.show', $data->id)}}"> 
                            {{$data->kode_transaksi}}
                          </a>
                          </td>
                          <td>
                          
                            {{$data->buku->judul}}
                          
                          </td>

                          <td>
                            {{$data->anggota->nama}}
                          </td>
                          <td>
                           {{date('d/m/y', strtotime($data->tgl_pinjam))}}
                          </td>
                          <td>
                            {{date('d/m/y', strtotime($data->tgl_kembali))}}
                          </td>
                          <td>
                          @if($data->status == 'pinjam')
                            <label class="badge badge-warning">Pinjam</label>
                          @else
                            <label class="badge badge-success">Kembali</label>
                          @endif
                          </td>
                          <td>
                          <form action="{{ route('transaksi.update', $data->id) }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            {{ method_field('put') }}
                            <button class="btn btn-info btn-sm" onclick="return confirm('Anda yakin data ini sudah kembali?')">Sudah Kembali
                            </button>
                          </form>
                          
                          </td>
                        </tr>
                      @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
</div> -->

<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
<script>
    $(function(){
    var ctx = document.getElementById("myChart").getContext('2d');
    var myChart = new Chart(ctx, {
      type: 'bar',
      data: {
        labels: ['Fiksi dan Sastra', 'Non Fiksi', 'Komik'],
        datasets: [
          {
          label: 'Kategori',
          data: [{!!$fiksi!!},{!!$nonFiksi!!},{!!$komik!!}],
          backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					],
					borderColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					],
					borderWidth: 1
          // data: [{!!$nonFiksi!!}],
          // data: [{!!$komik!!}],
        //   backgroundColor: 'rgba(40,167,69,1)',
        //   pointHoverBackgroundColor: 'rgba(254,86,83,.8)',
        // },
        // {
        //   label: 'Non Fiksi',
        //   data: [{!!$nonFiksi!!}],
        //   backgroundColor: 'rgba(220,53,69,.8)',
        //   pointHoverBackgroundColor: 'rgba(63,82,227,.8)',
        // },
        // {
        //   label: 'Komik',
        //   data: [{!!$komik!!}],
        //   backgroundColor: 'rgba(220,53,69,.8)',
        //   pointHoverBackgroundColor: 'rgba(63,82,227,.8)',
        }]
      },
      options: {
                scales: {
                    yAxes: [
                      {
                        ticks: {
                            beginAtZero:true
                        },
                    }],
                    xAxes: [{
                      gridLines: {
                        display: true,
                        tickMarkLength: 15,
                      }                      
                    }],
                }
                }
      // options: {
      //   legend: {
      //     display: true
      //   },
      //   scales: {
      //     yAxes: [{
      //       gridLines: {
      //         display: true,
      //         drawBorder: true,
      //         color: '#f2f2f2',
      //       },
      //       ticks: {
      //         beginAtZero: true,
      //         stepSize: 10,
      //         callback: function(value, index, values) {
      //           return value;
      //         }
      //       }
      //     }],
      //     xAxes: [{
      //       gridLines: {
      //         display: true,
      //         tickMarkLength: 15,
      //       }
      //     }]
      //   },
      // }
    });
});
// $(function(){
//     var chartData = {
//         labels: ["Fiksi dan Sastra", "Non-Fiksi", "Komik"],
//         datasets: [
//               {
//               label: 'Non Fiksi',
//               data: [{!!$nonFiksi!!}],
//               fillColor: "#79D1CF",
//               strokeColor: "#79D1CF",
//               },
//               {
//               label: 'Fiksi dan Sastra',
//               data: [{!!$fiksi!!}],
//               fillColor: "#79D1CF",
//               strokeColor: "#79D1CF",
//               },
//               {
//               label: 'Komik',
//               data: [{!!$komik!!}],
//               fillColor: "#79D1CF",
//               strokeColor: "#79D1CF",
//               }
//         ]
//     };

//     var ctx = document.getElementById("myChart").getContext("2d");
//     var myLine = new Chart(ctx).Line(chartData, {
//         showTooltips: false,
//         onAnimationComplete: function () {

//             var ctx = this.chart.ctx;
//             ctx.font = this.scale.font;
//             ctx.fillStyle = this.scale.textColor
//             ctx.textAlign = "center";
//             ctx.textBaseline = "bottom";

//             this.datasets.forEach(function (dataset) {
//                 dataset.points.forEach(function (points) {
//                     ctx.fillText(points.value, points.x, points.y - 10);
//                 });
//             })
//         }
//     });
// });
</script>
@endsection
