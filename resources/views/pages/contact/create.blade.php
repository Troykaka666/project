
<div class="row">
 <div class="col-12 col-md-8 mx-auto">
   <form action="/snmd-contactex" method="POST" class="pb-5">

     @csrf

     <div class="form-group">
       <label for="firstname" class="text-secondary text-uppercase">First Name</label>
       <input type="text" name="firstname" value="{{ old('firstname') }}"class="form-control rounded-0 py-4">
       <div>{{ $errors->first('firstname') }}</div>
     </div>

     <div class="form-group">
       <label for="lastname" class="text-secondary text-uppercase">Last Name</label>
       <input type="text" name="lastname" value="{{ old('lastname') }}"class="form-control rounded-0 py-4">
       <div>{{ $errors->first('lastname') }}</div>
     </div>

     <div class="form-group">
       <label for="email" class="text-secondary text-uppercase">Email</label>
       <input type="email" name="email" value="{{ old('email') }}"class="form-control rounded-0 py-4">
       <div>{{ $errors->first('email') }}</div>
     </div>

     <div class="form-group">
       <label for="message" class="text-secondary text-uppercase">Message</label>
       <textarea value="{{ old('message') }}"class="form-control rounded-0 py-4" rows="5" name="message"></textarea>
       <div>{{ $errors->first('message') }}</div>
     </div>

     <div class="row">
       <div class="col-12 text-center mt-4">
         <button type="submit" class="btn btn-primary btn btn-outline-secondary rounded-0 text-uppercase">Send Message</button>
       </div>
     </div>

   </form>
 </div>
</div>