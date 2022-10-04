@extends('layouts.admin')

@section('content')
<link rel="stylesheet" href="customer.css">	  
     <div class="table-responsive">
        <div class="table-wrapper">     
            <div class="table-title">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="text-center" style="font-size:35px;">Customer <b>Details</b></h2>
                    </div>
                    <div class="col-lg-12">
                        <div class="search-box">
                            <div class="input-group">
                                <script type="text/javascript">
                        $(document).ready(function () {
                      $('#dtBasicExample').DataTable();
                      $('.dataTables_length').addClass('bs-select');
                    });
                    </script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <table class="table table-bordered" id="dtBasicExample" style="width:1050px;">
                <thead>

                    <tr>
                        
                              <th class="th-sm"> S.No </th>
                              <th class="th-sm">Name
                              </th>
                              <th class="th-sm">Email
                              </th>
                              <th class="th-sm">Number
                              </th>
                              <th class="th-sm">City
                              </th>
                              <th class="th-sm">Created_at
                              </th>
                              <th class="th-sm">Updated_at
                              </th>
                            
                    </tr>
                </thead>
                <tbody>
                  @forelse ($User as $key=>$data)
            <tr>
            <td> {{$key+1}} </td>
            <td> {{$data->name}} </td>
            <td> {{$data->email}} </td>
            <td> {{$data->number}}  </td>
            <td> {{$data->city}}  </td>
            <td> {{$data->created_at}}  </td>
            <td> {{$data->updated_at}}  </td>
            

        </tr>
        @empty
            <h1 style="font-weight: bold;text-align: center;font-size: 40px;">No Data Found</h1>
        @endforelse
                                    
                </tbody>
            </table>
            <div class="clearfix">
                <li> {{ $User->links() }}</li>
            </div>
        </div>
        
    </div>        
</div>
  
   
      </div>
  <script>
   let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".sidebarBtn");
sidebarBtn.onclick = function() {
  sidebar.classList.toggle("active");
  if(sidebar.classList.contains("active")){
  sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
}else
  sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
}
 </script>
 <script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
  // Animate select box length
  var searchInput = $(".search-box input");
  var inputGroup = $(".search-box .input-group");
  var boxWidth = inputGroup.width();
  searchInput.focus(function(){
    inputGroup.animate({
      width: "300"
    });
  }).blur(function(){
    inputGroup.animate({
      width: boxWidth
    });
  });
});
</script>

    @endsection

