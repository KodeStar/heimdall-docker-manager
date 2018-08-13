<li class="">
    <a class="{{ $container->getState() == 'running' ? ' active' : 'inactive' }}" href="">
        <div class="status"><i class="fab fa-docker"></i></div>
        <div class="name">{{ substr($container->getNames()[0], 1) }}<span>{{ $container->getImage() }}</span></div>
    </a>
</li>