
  <div class="page-section" id="medicine">
    <div class="container">
      <h1 class="text-center mb-5 wow fadeInUp">Our Medicines</h1>

   
      
      @foreach($medicine as $medicines)

      <div class="item">
          <div class="card-doctor">
            <div class="header">
              <img height="300 px"src="medicinesimage/{{$medicines->image}}">
              
            </div>
            <div class="body">
              <p class="text-xl mb-0">{{$medicines->name}}</p>
              <span class="text-sm text-grey">{{$medicines->description}}</span><br>
              <span class="text-sm text-grey">{{$medicines->price}}</span>
            </div>
            <p>Order now</p>
            <span class="mai-call">+91-1234567890</span>
          </div>
          </div>
        </div>
       
           @endforeach
    

     
      </div>
    </div>
  </div>