<html>
    <head>
    <link rel="stylesheet" type="text/css"href="{{url('css/login.css')}}">
        <body>
            <style>
           
            </style>
    </head>
    <body>
        <section>  
            
            <div class="box">  
                
                 <div class="container">  
                      <div class="form">  
                           <h2>registration form</h2>  
                           <form action="{{route('store')}}" method="post"> 
                              @csrf 
                                <div class="input__box">  
                                     <input type="text" name="username" id="username"placeholder="Username">  
                                </div>  
                                <div class="input__box">  
                                     <input type="password" name="password" id="password" placeholder="Password">  
                                </div>  
                                <div class="input__box">  
                                     <input type="password" name="confirmpassword"id="confirmpassword"placeholder="confirmPassword">  
                                </div>  
                                <div class="input__box">  
                                     <input type="text" name="email"id="email" placeholder="email">  
                                </div> 
                                <div class="input__box">  
                                     <input type="text" name="contact"id="contact"placeholder="contact">  
                                </div> 


                                <div class="input__box">  
                                     <button> submit</button>  
                                </div>  
                               
                           </form>  
                      </div>  
                 </div>  
            </div>  
       </section>  
    </body>
</html>