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
                           <h2>Add books form</h2>  
                           <form action="{{route('store')}}" method="post"> 
                              @csrf 
                                <div class="input__box">  
                                     <input type="text" name="title" id="title"placeholder="title">  
                                </div>  
                                <div class="input__box">  
                                     <input type="text" name="description" id="description" placeholder="description">  
                                </div>  
                                <div class="input__box">  
                                     <input type="text" name="genre"id="genre"placeholder="genre">  
                                </div>  
                                <div class="input__box">  
                                     <input type="text" name="price"id="price" placeholder="price">  
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