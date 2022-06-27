<template>
    <section class="flex justify-center">
        <img class="guitar mt-5 mb-10 mx-auto rotate-45"
            src="@/images/item-placeholder.png" 
        />
        <section class="slideshow my-10">
            <div class="slide m-5">
            
                <div class="slide_part slide_part-one">
                </div>
                
                <div class="slide_part slide_part-two">
                </div>

                <div class="slide_part slide_part-three">
                </div>

            </div>  
        </section>

        <img class="guitar mt-5 mb-10 mx-auto -rotate-45"
            src="@/images/item-placeholder.png" />

    </section>
</template>

<style>
    .guitar {
        width: 7%;
        height: 7%;
    }
    .slideshow{
        display: flex;
        align-items: center;
        justify-content: center;
        align-items: center;
        min-width: 60vw;
        max-height: auto;
        
    }
    .slide {
        position: relative;
        width: 100%;
        height: 100%;
        overflow: hidden;
        border-radius: 16px;
        background-image: url( @/images/banner1.png );
        background-size: cover;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.3);
    }
    .slide_part {
        position: absolute;
        top: 0;
        left: 0;
        display: flex;
        width: 100%;
        height: 100%;
        transform: translateX( 60vw );
        background-image: url( @/images/banner2.png );
        background-size: cover;
        animation: opaqTransition 28s cubic-bezier(0, 0, 0, 0.97) infinite;
        animation-delay: 7s;
    }
    .slide_part.slide_part-two {
        background-image: url( @/images/banner3.png );
        animation-delay: 14s;
    }
    .slide_part.slide_part-three {
        background-image: url( @/images/banner4.png );
        animation-delay: 21s;
    }
    @keyframes opaqTransition {
        3% { transform: translateX( 0 ); }
        25% { transform: translateX( 0 ); }
        28% { transform: translateX( -60vw ); }
        100% { transform: translateX( -60vw ); }
    }
</style>