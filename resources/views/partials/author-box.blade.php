<section class="author-box">
    <img src="/resources/img/avatars/{{$author -> avatar}}" alt="" class="avatar">
    <h4 class="name">{{$author -> name}}</h4>
    <h4 class="age"><span class="title-header">Age:</span>
    <p>{{$author -> age}}</p>
    </h4>
    <h4 class="telephone"><span class="title-header">Telephone:</span> <a href="tel:+48{{$author -> telephone}}">{{$author -> telephone}}</a></h4>
    <h4 class="email"><span class="title-header">Email:</span> <a href="mailto:{{$author -> email}}">{{$author -> email}}</a></h4>
    <h4 class="about_me"><span class="title-header">About me:</span>
        <p class="description">{{$author -> about_me}}</p>
    </h4>
    <a class="more_posts" href="/blog/author/{{$author -> id}}">{{$author -> name}}'s posts</a>
</section>
