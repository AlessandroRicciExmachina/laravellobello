 @props(['comment'])
 {{-- @dd($comment->toArray()) --}}
 <article class="flex md:flex-column bg-gray-100 p-6 rounded-xl border-gray-200 space-x-4 mt-4">
     <div style='flex-shrink:0'>
         <img src="https://picsum.photos/100/100" class='rounded-xl' style='min-width:100px'>
     </div>
     <div>
         <header>
             <h3 class='font-bold'>{{ $comment->author->name }}</h3>
             <p class='text-xs'>
                 Posted <time>{{ $comment->created_at->diffForHumans() }}</time>
             </p>
         </header>
         <p>
             {{ $comment->body }}
         </p>
     </div>
 </article>
