import { defineStore } from 'pinia'
import { computed, ref } from 'vue'


export const useWeb3Store = defineStore('web3', () => {
    const connectedWallet = ref(null)
    const connectingWallet = ref(false)
    const chainId = ref(null)

    const isMetamaskInstalled = computed(() => {
        return Boolean(window.ethereum && window.ethereum.isMetaMask);
    })
    const isTrustWalletInstalled = computed(() => {
        return Boolean(window.ethereum && window.ethereum.isTrust);
    })
    const isBraveWalletInstalled = computed(() => {
        return Boolean(window.braveEthereum && window.braveEthereum.isBraveWallet);
    })

    return { connectedWallet, connectingWallet, isMetamaskInstalled, isTrustWalletInstalled, isBraveWalletInstalled, chainId }
})
