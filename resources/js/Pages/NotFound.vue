<template>
    <div class="page">
   <div class="p-5 bg-dark text-light">
    <div class="container d-flex">
        <img src="https://media-assets.wired.it/photos/615da806abe69756b88436bd/master/pass/Deadpool.jpg" alt="">
        <div class="ms-3">

        <h1 class="display-3">Ops! Page not found, 404</h1>
        <p class="lead">Sorry the page you're loking for doesn't exist</p>

        </div>

    </div>
   </div>
        <div class="container py-5">

            This page doesn't exist , try another one , or just go to the home section of the site !
    <ul>
        <li>
            <router-link :to="{name:'home'}" >HomePage</router-link>

        </li>
          <li>
            <router-link :to="{name:'about'} " >About</router-link>

        </li>
          <li>
            <router-link :to="{name:'Posts'}" >Posts</router-link>

        </li>
    </ul>

        </div>


    </div>

</template>

<script>
export default {
   neme: 'NotFound'
}
</script>


<style lang="scss" scoped>
img{
    width: 200px;
    border-radius: 50%;
}
</style>
