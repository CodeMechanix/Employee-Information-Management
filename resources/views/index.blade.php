<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>List all Employee</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>            
    <script src="https://markcell.github.io/jquery-tabledit/assets/js/tabledit.min.js"></script>
  </head>
  <body>
    <div class="container">
      <br />
      <h3 align="center">List all Employee</h3>
      <br />
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">Employee Details</h3>
        </div>
        <div class="panel-body">
          <div class="table-responsive">
            @csrf
            <table id="editable" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Employee ID</th>
                  <th>Name</th>
                  <th>Department</th>
                  <th>Company</th>
                  <th>Salary</th>
                  <th>Joining Date</th>
                  <th>Termination date</th>
                  <th>Designation</th>
                </tr>
              </thead>
              <tbody>
                @foreach($employees as $row)
                <tr>
                  <td>{{ $row->id }}</td>
                  <td>{{ $row->emoplyee_no }}</td>
                  <td>{{ $row->name }}</td>
                  <td>{{ $row->department }}</td>
                  <td>{{ $row->company }}</td>
                  <td>{{ $row->salary }}</td>
                  <td>{{ $row->joining_date }}</td>
                  <td>{{ $row->termination_date }}</td>
                  <td>{{ $row->designation->title}}</td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>

<script type="text/javascript">
$(document).ready(function(){
   
  $.ajaxSetup({
    headers:{
      'X-CSRF-Token' : $("input[name=_token]").val()
    }
  });

  $('#editable').Tabledit({
    url:'{{ route("employee_edit") }}',
    dataType:"json",
    columns:{
      identifier:[0, 'id'],
      editable:
      [
        [1, 'emoplyee_no'],
        [2, 'name'], 
        [3, 'department'], 
        [4, 'company'],
        [5, 'salary'],
        [6, 'joining_date'],
        [7, 'termination_date'],
        [8, 'designation_id', 
        '{"1":"Software Engineer", "2":"Senior Software Engineer", "3": "Lead Software Engineer", "4": "Project Manager", "5": "Team Lead", "6": "SQA"}'
        ]
      ]
    },
    restoreButton:false,
    onSuccess:function(data, textStatus, jqXHR)
    {
      if(data.action == 'delete')
      {
        $('#'+data.id).remove();
      }
    }
  });

});  
</script>