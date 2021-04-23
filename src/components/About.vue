<template>
<div class="section">
    <div class="container">

        <div class="has-text-centered mb-6">
            <p class="title is-3">Who am I?</p>
            <p class="subtitle is-5">And what are my interests?</p>
        </div>

        <div class="columns">
            <div class="column">
                <div class="card">
                <div class="card-content">
                    <div class="media">
                    <div class="media-left">
                        <figure class="image is-48x48">
                        <img src="@/assets/img/pic.png" alt="My likeness">
                        </figure>
                    </div>
                    <div class="media-content">
                        <p class="title is-4">Aldin Kovačević</p>
                        <p class="subtitle is-6">@aldin-sxr</p>
                    </div>
                    </div>
                    <div class="content">
                        <p>
                            I am a Master's student at International Burch University, Department of Information Technologies.
                            I consider myself hard-working, meticulous, highly motivated and willing to learn and adapt to new technologies.
                        </p>
                        <p>

                        </p>
                    <a href="#">#learn</a> <a href="#">#more</a>
                    </div>
                </div>
                </div>
            </div>
            <div class="column">
                <div class="content">
                    <p class="mt-3">Primary programming languages of interest include 
                        <icon-text icon="php" text="PHP" />, 
                        <icon-text icon="javascript" text="JavaScript" />, 
                        <icon-text icon="python" text="Python" /> and 
                        <icon-text icon="c" text="C/C++" />.
                    </p>
                    <p class="mt-3">Primary areas of interest include <b>backend development</b>, <b>decentralized technologies</b> and <b>data science</b>.</p>
                </div>
            </div>
        </div>

        <div class="has-text-centered mb-6 is-size-5">
            <p class="mt-3">よろしくお願いしま。</p>
        </div>
    </div>
</div>
</template>

<script>
import IconText from '@/components/IconText'

export default {
    components: {
        IconText
    }
}
</script>

<style>

</style>