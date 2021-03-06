@extends('navbar')

@section('content')

            <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                </symbol>
                <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
                </symbol>
                <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                </symbol>
                </svg>

        @if(session('flashMessage'))
        <div class="alert alert-success d-flex align-items-center " role="alert">
        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
        {{session ('flashMessage')}} 
        </div>
        @endif   

        @if(session('flashMessageProblem'))
        <div class="alert alert-danger d-flex align-items-center " role="alert">
        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
        {{session ('flashMessageProblem')}} 
        </div>
        @endif   

        
        @if (session('status'))
    <h6 class="alert alert-success">{{ session('status')}}</h6>
  @endif
        
            


<div class="container">

    <div class="row">
        <div class=" col text-center">
            
            <div class="mt-7 display-3 text-center">PARTY</div>
            <html>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Task', 'Hours per Day'],
            <?php echo $arr['chartData']?>
        ]);

        var options = {
          title: 'On-going Election Votes by Party',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>
  
  
  <div class="container-fluid">
        <div class="mt-5 row">
        <div class="col-sm-5  card">
              <div class=" card-header">
                <h3 class="card-title">On-going Election by Party</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table table">
                  <thead>
                    <tr>
                      <th>Party</th>
                      <th>Progress</th>
                      <th style="width: 40px">Votes</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach ($ongores as $show)
                    <tr>
                      <td>{{ $show->party}}</td>
                      <td>
                        <div class="progress">
                          <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: {{$show->votes_count}}%"></div>
                        </div>
                      </td>
                      <td>{{ $show->votes_count}}</td>
                      @endforeach
                    </tr>
                      
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              </div>


          <div class="col-sm-6">
    <div id="piechart_3d" style="width: 900px; height: 300px;"></div>
  
</html>

        </div>
        <div id="piechart_3d" style="width: 900px; height: 300px;"></div>
  
</html>
</div></div>

        



<!-- /Fakulti -->
<div class=" mt-7 display-3 text-center">FACULTY</div>
<div class="container">

    <div class="row">
        <div class=" col text-center">


            <html>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Task', 'Hours per Day'],
            <?php echo $arr2['chartData2']?>
        ]);

        var options = {
          title: 'On-going Election Votes by Fakulty Category',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d1'));
        chart.draw(data, options);
      }
    </script>
  
  
  <div class="container-fluid">
        <div class="mt-5 row">
        <div class="col-sm-5  card">
              <div class=" card-header">
                <h3 class="card-title">On-going Election by Faculty </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
              <table class="table table">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Election area</th>
                      <th>Faculty</th>
                      <th>Progress</th>
                      <th style="width: 40px">Votes</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach ($elecfac as $show)
                    <tr>
                      <td>{{ $show->name}}</td>
                      <td>{{ $show->elecarea}}</td>
                      <td>{{ $show->faculty}}</td>
                      <td>
                        <div class="progress">
                          <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: {{$show->votes_count}}%"></div>
                        </div>
                      </td>
                      <td>{{ $show->votes_count}}</td>
                      @endforeach
                    </tr>
                      
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              </div>


          <div class="col-sm-6">
    <div id="piechart_3d1" style="width: 900px; height: 300px;"></div>
  
</html>

        </div>
        <div id="piechart_3d1" style="width: 900px; height: 300px;"></div>
  
</html>
</div></div>



<div class=" mt-7 display-3 text-center">PUBLIC</div>
<!-- /Umumi -->
<div class="container">

    <div class="row">
        


            <html>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Task', 'Hours per Day'],
            <?php echo $arr3['chartData3']?>
        ]);

        var options = {
          title: 'On-going Election Votes by Public Category',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d11'));
        chart.draw(data, options);
      }
    </script>
  
  
  <div class="container-fluid">
        <div class="mt-5 row">
        <div class="col-sm-5  card">
              <div class=" card-header">
                <h3 class="card-title">On-going Election Votes by Public</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
              <table class="table table">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Election area</th>
                      <th>Faculty</th>
                      <th>Progress</th>
                      <th style="width: 40px">Votes</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach ($elecpub as $show)
                    <tr>
                      <td>{{ $show->name}}</td>
                      <td>{{ $show->elecarea}}</td>
                      <td>{{ $show->faculty}}</td>
                      <td>
                        <div class="progress">
                          <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: {{$show->votes_count}}%"></div>
                        </div>
                      </td>
                      <td>{{ $show->votes_count}}</td>
                      @endforeach
                    </tr>
                      
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              </div>


          <div class="col-sm-6">
    <div id="piechart_3d11" style="width: 900px; height: 300px;"></div>
  
</html>

        </div>
        <div id="piechart_3d11" style="width: 900px; height: 300px;"></div>
  
</html>
</div>
</div>

@endsection
