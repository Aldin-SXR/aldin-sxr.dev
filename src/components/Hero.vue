<template>
<section class="hero is-light">
    <div class="hero-body">
        <div class="columns is-centered">
            <div class="column is-narrow">
                <figure class="image is-128x128">
                    <img class="zoom is-rounded" src="@/assets/img/pic.png">
                </figure>
            </div>
            <div class="column">
                <p class="title mb-6">
                    [<span class="has-text-info">root</span>@<span class="has-text-danger">aldin-sxr</span> me]$ cat info
                </p>
                <p class="subtitle">
                    <b class="has-text-danger"> -> </b> Hello, my name is <b class="zoom has-text-danger">Aldin Kovačević</b>. <br>
                    <b class="has-text-danger"> -> </b> And I kind of suck at UI design. <br>
                    <b class="has-text-danger"> -> </b> But I'm good at other stuff. <br> 
                    <b class="has-text-danger"> -> </b> Backend and Blockchain developer @ 
                        <b><a class="zoom has-text-danger" href="https://digtl.co/" target="_blank">DIGTL</a></b>
                </p>
            </div>
        </div>
    </div>
</section>
</template>

<script>
export default {
    name: 'Hero'
}
</script>

<style lang="scss" scoped>
@import "@/assets/scss/_links.scss";

$red: #f14668 !important;

img {
    object-fit: cover;
}

a {
    @include link-underline($red)
}

</style>