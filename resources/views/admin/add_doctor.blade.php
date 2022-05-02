

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

         



        <div class="container" align="center" style="padding-top:100px;">

        @if(session()->has('message'))

<div>class="alert alert-success">


  <button type="button"class="close"data-dismiss="alert">
    x
  </button>
     
{{session()->get('message')}}




</div>


@endif
          <form action="{{url('upload_doctor')}}" method="post" enctype="multipart/form-data">
            @csrf
            
                        <div style="padding:15px;">
              <label>Doctor Name</lable>
              <input type="text" style="color:black" name="name" placeholder="write the name" required="">
            </div>

            <div style="padding:15px;">
              <label>Phone No</lable>
              <input type="number" style="color:black" name="number" placeholder="write the Phone No" required="">
            </div>

            <div style="padding:15px;">
              <label>Speciality</lable>
              <select name="speciality" style="color:black; width: 200px;" required="">
                <option>Select</option>
                <option value="skin">skin</option>
                <option value="Heart">Heart</option>
                <option value="Eye">Eye</option>
                <option value="Nose">Nose</option>
              </select>
            </div>

            <div style="padding:15px;">
              <label>Room No</lable>
              <input type="text" style="color:black" name="room" placeholder="Room No" required="">
            </div>

            <div style="padding:15px;">
              <label>Doctor Image</lable>
              <input type="file" name="file" required="">
            </div>

            <div style="padding:15px;">
              <input type="submit" class="btn btn-success">
            </div>

          </form>

        </div>
        
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