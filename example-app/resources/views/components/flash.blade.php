 @if (session()->has('success'))
     <div class='fixed bottom-20 right-20 bg-blue-500 text-white py-2 px-4 rounded' x-data="{show:true}"
         x-init='setTimeout(()=>{show = false},4000)' x-show="show">
         <p>
             {{ session('success') }}
         </p>
     </div>
 @endif
