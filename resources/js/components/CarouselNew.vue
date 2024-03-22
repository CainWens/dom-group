<template>

    <n-carousel
        direction="vertical"
        dot-type="dot"
        style="width: 100%;"
        autoplay

    >
        <div class="carousel-block">
            <img
                class="carousel-img kenburns-bottom"
                src="https://xn--80axh3d.xn--p1ai/images/Kartinka_-_Dizai_774_n_interyera.jpg"
            >
            <div class="carousel-text-block flex justify-center items-center bg-black bg-opacity-40">
                <p class="carousel-text text-8xl text-center top-1/2 text-white font-bold tracking-in-expand">
                    Дизайн
                </p>
            </div>
        </div>
        <div  class="carousel-block">
        <img
            class="carousel-img kenburns-bottom"
            src="https://static.tildacdn.com/tild6262-6365-4433-b632-643432323663/photo.jpg"
        >
            <div class="carousel-text-block flex justify-center items-center bg-black bg-opacity-40">
                <p class="carousel-text text-8xl text-center top-1/2 text-white font-bold tracking-in-expand">
                    Отделка
                </p>
            </div>
        </div>
        <div  class="carousel-block">
        <img
            class="carousel-img kenburns-bottom"
            src="https://south-style.ru/wp-content/uploads/str-meb-na-zakaz1.jpg"
        >
            <div class="carousel-text-block flex justify-center items-center bg-black bg-opacity-40">
                <p class="carousel-text text-8xl text-center top-1/2 text-white font-bold tracking-in-expand">
                    Мебель
                </p>
            </div>
        </div>
        <template #dots="{ total, currentIndex, to }">
            <ul class="custom-dots">

                <li
                    :key="1"
                    :class="{ ['is-active']: currentIndex === 1 - 1 }"
                    @click="to(1 - 1)"
                >
                    D
                </li>
                <li
                :key="2"
                :class="{ ['is-active']: currentIndex === 2 - 1 }"
                @click="to(2 - 1)"
                >
                    O
                </li>
                    <li
                    :key="3"
                    :class="{ ['is-active']: currentIndex === 3 - 1 }"

                    @click="to(3 - 1)"
                >
                   M
                </li>
            </ul>
        </template>
    </n-carousel>
</template>

<style scoped>
.carousel-block{
    position: relative;
    width: 100%;
    height: 100%;
}
.carousel-img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}
.carousel-text-block{
    position: absolute;
    z-index: 5;
    width: 100%;
    height: 100%;
    top: 0;
}
.carousel-text{
    -webkit-text-shadow: 0px 0px 10px rgba(0, 0, 0, 1);
    -moz-text-shadow: 0px 0px 10px rgba(0, 0, 0, 1);
    text-shadow: 0px 0px 10px rgba(0, 0, 0, 1);
}
.tracking-in-expand {
    -webkit-animation: tracking-in-expand 0.7s cubic-bezier(0.215, 0.610, 0.355, 1.000) both;
    animation: tracking-in-expand 0.7s cubic-bezier(0.215, 0.610, 0.355, 1.000) both;
}
.custom-dots {
    display: flex;
    flex-direction: column;
    margin: 0;
    padding: 0;
    position: absolute;
    top: 35%;
    left: 20px;
}

.custom-dots li {
    color: black;
    display: flex;
    width: 60px;
    height: 60px;
    margin: 8px 3px;
    align-items: center;
    justify-content: center;
    font-size: 24px;
    font-weight: bold;
    border-radius: 100%;
    background-color: rgba(255, 255, 255, 0.8);
    transition: width 0.3s, background-color 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    cursor: pointer;
}

.custom-dots li.is-active {
    width: 70px;
    height: 70px;
    background: #fff;
}

.kenburns-bottom {
    -webkit-animation: kenburns-bottom 15s ease-out both;
    animation: kenburns-bottom 15s ease-out both;
}
@-webkit-keyframes kenburns-bottom {
    0% {
        -webkit-transform: scale(1) translateY(0);
        transform: scale(1) translateY(0);
        -webkit-transform-origin: 50% 84%;
        transform-origin: 50% 84%;
    }
    100% {
        -webkit-transform: scale(1.25) translateY(15px);
        transform: scale(1.25) translateY(15px);
        -webkit-transform-origin: bottom;
        transform-origin: bottom;
    }
}
@keyframes kenburns-bottom {
    0% {
        -webkit-transform: scale(1) translateY(0);
        transform: scale(1) translateY(0);
        -webkit-transform-origin: 50% 84%;
        transform-origin: 50% 84%;
    }
    100% {
        -webkit-transform: scale(1.25) translateY(15px);
        transform: scale(1.25) translateY(15px);
        -webkit-transform-origin: bottom;
        transform-origin: bottom;
    }
}
@-webkit-keyframes tracking-in-expand {
    0% {
        letter-spacing: -0.5em;
        opacity: 0;
    }
    40% {
        opacity: 0.6;
    }
    100% {
        opacity: 1;
    }
}
@keyframes tracking-in-expand {
    0% {
        letter-spacing: -0.5em;
        opacity: 0;
    }
    40% {
        opacity: 0.6;
    }
    100% {
        opacity: 1;
    }
}
</style>

<script>
export default {
    name:"Carousel",
    mounted() {

    }
}
</script>
