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
                            <img class="is-rounded" src="@/assets/img/pic-anim.png" alt="My anime likeness">
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
                            At the moment, I am working as a full-stack developer at <a target="_blank" href="https://digtl.co/">DIGTL</a> and a student assistant at <a target="_blank" href="https://www.ibu.edu.ba/">International Burch University</a>.
                        </p>
                    <a target="_blank" href="https://www.linkedin.com/in/aldin-kovacevic/">#my-cv</a> <a href="mailto:me@aldin-sxr.dev">#contact-me</a>
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
                    <p class="mt-3">Primary areas of interest include <b>backend development</b>, <b>decentralized technologies</b> and <b>data science</b>. I also dabble in <b>database administration</b> and <b>server management</b>.</p>
                    <p class="mt-3">My hobies include <b>reading</b>, <b>playing games</b> (mostly RPGs and strategy games) and <b>language studies</b>. </p>
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