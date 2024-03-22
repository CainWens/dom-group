<template>
    <div class="mt-24 bg-white bg-opacity-80 py-10 px-6 rounded">
        <div class="text-center text-5xl text-black">Этапы ремонта с DOM GROUP</div>
    <n-space vertical class="my-28">

        <n-steps

            size="small"
            :current="(current as number)"
            :status="currentStatus"
        >
            <n-step
                title="Дизайнер"
                description="Поиск дизайнера для вашего будущего интерьера не составит большого труда"
            />
            <n-step
                title="Отделка"
                description="После нахождения дизайнера необходимо найти отделочников - тех, кто сотворит чудо"
            />
            <n-step
                title="Мебель"
                description="Жилище будет выглядеть как 'с иголочки' если сделать всю мебель под заказ по вашим размерам"
            />
            <n-step
                title="Готово"
                description="Теперь у вас прекрасный новый дом"
            />
        </n-steps>
        <n-space
            class="mt-8"
            justify="center">
            <n-button-group>
                <n-button @click="prev">
                    <template #icon>
                        <n-icon>
                            <md-arrow-round-back />
                        </n-icon>
                    </template>
                </n-button>
                <n-button @click="next">
                    <template #icon>
                        <n-icon>
                            <md-arrow-round-forward />
                        </n-icon>
                    </template>
                </n-button>
            </n-button-group>
        </n-space>
    </n-space>
    <div class="flex justify-between w-full ">
        <div class="text-black w-full lg:w-1/2">
            <n-h1 prefix="bar">
                <n-text type="primary">
                    Монолит? нет
                </n-text>
            </n-h1>
            <n-h4>Скорее конструктор, где вы сможете собрать всех кто будет принимать участие в ремонте вашего дома.</n-h4>
            <n-h4>Также не обязательно чтобы были все участники. Допустим, вам нужна только мебель, таким образом вы просто загружаете свой эскиз/рисунок чего вы хотите, а система сама разошлёт этот эскиз всем мебельщикам вашего города и те выставят свои цены, а дальше дело уже только за вами.<br>
                Так можно делать во всех этапах
            </n-h4>
            <n-h4>
                А ещё у нас можно выбрать конкретных мастеров с кем вы уже работали и знаете их, или по рекомендациям других мастеров.
            </n-h4>
        </div>
        <div id="perspective" class="w-1/2 hidden lg:flex">
            <div id="object">
                <img src="storage/img/konstructor.jpg" alt="">
            </div>
        </div>
    </div>
    </div>
</template>

<script lang="ts">
import { defineComponent, ref } from 'vue'
import { MdArrowRoundBack, MdArrowRoundForward } from '@vicons/ionicons4'
import { StepsProps } from 'naive-ui'

export default defineComponent({
    components: {
        MdArrowRoundBack,
        MdArrowRoundForward
    },
    setup () {
        const currentRef = ref<number | null>(1)
        return {
            currentStatus: ref<StepsProps['status']>('process'),
            current: currentRef,
            next () {
                if (currentRef.value === null) currentRef.value = 1
                else if (currentRef.value >= 4) currentRef.value = null
                else currentRef.value++
            },
            prev () {
                if (currentRef.value === 0) currentRef.value = null
                else if (currentRef.value === null) currentRef.value = 4
                else currentRef.value--
            }
        }
    },
    mounted() {
        this.perspective();
    },
    methods:{
        perspective(){
            document.getElementById('perspective').addEventListener('mousemove', function(e) {
                var w = window.ge.innerWidth / 2;
                var h = window.ge.innerHeight / 2;
                var x = (e.pageX - w) / 10;
                var y = (e.pageY - h) / 10;
                document.getElementById('object').style.transform = 'rotateX(' + y + 'deg) rotateY(' + x + 'deg)';
            });
        }
    }
})
</script>
<style>

#perspective {
    align-items: center;
    justify-content: center;
    overflow: hidden;
}

#object {
    overflow: hidden;
    width: 50%;
}
#object img{
    transition: 200ms ease-out;
}
#object:hover img{
    scale: 1.05;
}
</style>
