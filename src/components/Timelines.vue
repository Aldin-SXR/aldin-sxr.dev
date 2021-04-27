<template>
<section class="section">
    <div class="container">

        <div class="has-text-centered mb-6">
            <p class="title is-3">Education and Work Experience</p>
            <!-- <p class="subtitle is-5">And what are my interests?</p> -->
        </div>

        <!-- Education timeline -->
        <div class="columns">
            <div class="column">
                <p class="subtitle is-5">My academic path</p>

                <div class="timeline">
                    <header class="timeline-header">
                        <span class="tag is-medium is-info">Start</span>
                    </header>

                    <div class="timeline-item">
                        <div class="timeline-marker is-info"></div>
                        <div class="timeline-content">
                            <p class="heading">2012 - 2016</p>
                            <p>Gynmansium Graduate</p>
                            <small><a href="https://rps.edu.ba/en/" target="_blank">Richmond Park International School Tuzla</a></small>
                        </div>
                    </div>

                    <div class="timeline-item">
                        <div class="timeline-marker is-info"></div>
                        <div class="timeline-content">
                            <p class="heading">2016 - 2019</p>
                            <p>Department of Information Technologies</p>
                            <small><a target="_blank" href="https://www.ibu.edu.ba/">International BURCH University</a></small>
                        </div>
                    </div>

                    <div class="timeline-item">
                        <div class="timeline-marker is-danger is-icon">
                            <i class="fas fa-user-graduate"></i>            
                        </div>
                        <div class="timeline-content">
                            <p class="heading">July 2019</p>
                            <p><b>Bachelor of Software Engineering</b></p>
                        </div>
                    </div>

                    <div class="timeline-item">
                        <div class="timeline-marker is-info"></div>
                        <div class="timeline-content">
                            <p class="heading">2019 - present</p>
                            <p>Master's Degree in Big Data</p>
                            <small><a target="_blank" href="https://www.ibu.edu.ba/">International BURCH University</a></small>
                        </div>
                    </div>

                    <header class="timeline-header">
                        <span class="tag is-medium is-info">End</span>
                    </header>
                </div>
            </div>
            <div class="column">
                <p class="subtitle is-5 has-text-right">My career path</p>

                <div class="timeline is-rtl">
                    <header class="timeline-header">
                        <span class="tag is-medium is-danger">Start</span>
                    </header>

                    <div class="timeline-item">
                        <div class="timeline-marker is-danger"></div>
                        <div class="timeline-content">
                            <p class="heading">Apr 2017 - July 2017</p>
                            <p>Junior PHP Developer @ ByteCode</p>
                            <p><small>internship position</small></p>
                        </div>
                    </div>

                    <div class="timeline-item">
                        <div class="timeline-marker is-danger"></div>
                        <div class="timeline-content">
                            <p class="heading">Oct 2017 - Aug 2018</p>
                            <p>Embedded Software Developer @ <a target="_blank" href="https://www.linkedin.com/company/bsmartba/">bSmart</a></p>
                            <p><small>embedded software development in C/C++ for "smart home" products</small></p>
                        </div>
                    </div>

                    <div class="timeline-item">
                        <div class="timeline-marker is-danger"></div>
                        <div class="timeline-content">
                            <p class="heading">Aug 2018 - Sep 2020</p>
                            <p>Backend Developer @ <a target="_blank" href="https://tribeos.io/">tribeOS</a></p>
                            <p><small>backend development in the field of digital advertising</small></p>
                        </div>
                    </div>

                    <div class="timeline-item">
                        <div class="timeline-marker is-danger"></div>
                        <div class="timeline-content">
                            <p class="heading">Sep 2020 - present</p>
                            <p>Full-Stack Developer @ <a target="_blank" href="https://digtl.co/">DIGTL</a></p>
                            <p><small>full-stack Web and blockchain development for a digital asset management and exchange platform</small></p>
                        </div>
                    </div>

                    <header class="timeline-header">
                        <span class="tag is-medium is-danger">End</span>
                    </header>
                </div>
            </div>
        </div>

    </div>
</section>
</template>

<script>
export default {
    name: 'Timelines'
}
</script>

<style>

</style>