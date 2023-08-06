import { ref, computed } from 'https://unpkg.com/vue@3/dist/vue.esm-browser.js'



export const temoignages = ref([])
export const selectedId = ref(0)


export const selectedTemoignage = computed(() => {
  const id = selectedId.value
  return temoignages.value.find(temoignage => temoignage.id === id)

})

export function selectedHalf(rating) {

  return Number.isInteger(rating)

}


fetch("public/js/temoignages.json").then(resp => resp.json()).then(fichier => {
  temoignages.value = fichier
  selectRandomTemoignage()
})

function selectRandomTemoignage() {
  const randomIndex = Math.floor(Math.random() * temoignages.value.length)
  selectedId.value = temoignages.value[randomIndex].id
}

