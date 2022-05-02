

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->

    @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      
            <div class="d-flex align-items-center justify-content-between">
              <a href="https://www.bootstrapdash.com/product/corona-free/"><i class="mdi mdi-home me-3 text-white"></i></a>
              <button id="bannerClose" class="btn border-0 p-0">
                <i class="mdi mdi-close text-white me-0"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- partial:partials/_sidebar.html -->

      @include('admin.sidebar')

     
      <!-- partial -->
      
        @include('admin.navbar')

         

        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
        <div align="center" style="padding-top: 100px;">
        <table>
                <tr style="background-color:black;">
                    <th style="padding: 10px">Doctor Name</th>
                    <th style="padding: 10px">Phone</th>
                    <th style="padding: 10px">Speciality</th>
                    <th style="padding: 10px">Room No</th>
                    <th style="padding: 10px">Image</th>
                    <th style="padding: 10px">Delete</th>
                    

                    

                </tr>

                @foreach($data as $doctor)
                <tr style="background-color:black;">
                    <td>{{$doctor->name}}</td>
                    <td>{{$doctor->phone}}</td>
                    <td>{{$doctor->speciality}}</td>
                    <td>{{$doctor->room}}</td>
                    <td><img height="100" width="100" src="doctorimage/{{$doctor->image}}"></td>
                    <td><a class="btn btn-danger" onclick="return confirm('are you sure?')" href="{{url('deletedoctor',$doctor->id)}}">Delete</a></td>
                </tr>
                @endforeach
            </table>
            
        

       
        
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="admin/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="admin/assets/vendors/chart.js/Chart.min.js"></script>
    <script src="admin/assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="admin/assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="admin/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="admin/assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <script src="admin/assets/js/jquery.cookie.js" type="text/javascript"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="admin/assets/js/off-canvas.js"></script>
    <script src="admin/assets/js/hoverable-collapse.js"></script>
    <script src="admin/assets/js/misc.js"></script>
    <script src="admin/assets/js/settings.js"></script>
    <script src="admin/assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="admin/assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>