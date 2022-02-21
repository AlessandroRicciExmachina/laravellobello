@props(['trigger'])
<div x-data="{show:false}" @click.away="show=false">

    <div @click="show = !show">

        {{ $trigger }}

    </div>

    <div x-show="show" class="py-2 absolute bg-gray-100 w-full rounded-xl mt-2 w-32 z-50"
        style='display:none;max-height:300px;overflow:auto'>
        {{ $slot }}

    </div>
</div>
