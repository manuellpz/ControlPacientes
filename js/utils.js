export const select = selector => {
   return document.querySelector(selector)
}

export const setStyles = (element,styles) => {
   return Object.assign(element.style,styles)
}

export const getTime = () => {
   const date = new Date()
   return `${date.toLocaleDateString('es-MX')} ${date.toLocaleTimeString('en-US')}`
}