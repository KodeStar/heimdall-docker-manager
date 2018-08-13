<div class="spotlight">
    <div class="image_column">
        <img src="{{ $docker->image }}" alt="{{ $docker->name }}" />
        <a class="link" href="">Details</a>
    </div>
    <div class="docker_details">
            <div class="name"><span>{{ $docker->container }}</span>{{ $docker->name }}</div>
            <div class="details">{{ str_limit($docker->description, 80) }}</div>   
            <div class="actions"><a class="support" href="">Support</a> <a class="button install" href="">Install</a></div>   
    </div>
</div>