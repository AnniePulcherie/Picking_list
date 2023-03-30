<div class="wrapper">
    <div class="text-center mt-4 name">
        Login
    </div>
   
    <form class="p-3 mt-3" wire:submit.prevent="login()">
       <div class="form-field d-flex align-items-center">
           <span class="far fa-user"></span>
           <input type="text" name="userLogin" id="userLogin" placeholder="user-login" wire:model.defer="userLogin"/>
       </div>
       <div class="form-field d-flex align-items-center">
           <span class="fas fa-key"></span>
           <input type="password" name="password" id="pwd" placeholder="Password" wire:model.defer="password"/>
       </div>
       <span>{{$error}}</span>
       <button class="btn mt-3">Login</button>
   </form>
  <div class="text-center fs-6">
      <span><a href="#">Forget password?</a> or <a href="#">Sign up</a></span>
   </div>
</div>