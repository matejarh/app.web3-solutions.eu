<template>
    <div>
        <h1>Live Token Prices</h1>
        <ul>
            <li v-for="(price, token) in tokenPrices" :key="token">
                {{ token }}: {{ price }}
            </li>
        </ul>
    </div>
</template>

<script>
import { defineComponent, ref, onMounted } from 'vue';
import WebSocket from 'ws';


export default defineComponent({
    setup() {
        const tokenPrices = ref({});

        // Establish WebSocket connection on component mount
        onMounted(() => {
            const apikey = "ngayvTWcI50EDHfMuTj7eoEuP9BdBeIi"
            const ws = new WebSocket('wss://api.1inch.exchange/v3.0/1/ws', {
                headers: {
                    Authorization: `Basic ${apikey}`,
                },
            });

            ws.onopen = () => {
                console.log('WebSocket connection opened');
            };

            ws.onmessage = (event) => {
                const data = JSON.parse(event.data);
                console.log(data)
                /* if ('args' in data) {
                    data.args.prices.forEach((token) => {
                        tokenPrices.value[token.fromToken] = parseFloat(token.price);
                    });
                } */
            };

            ws.onclose = () => {
                console.log('WebSocket connection closed');
            };

            // Clean up WebSocket connection on component unmount
            return () => {
                ws.close();
            };
        });

        return { tokenPrices };
    },
});
</script>
