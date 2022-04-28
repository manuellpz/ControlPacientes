export const select = selector => {
   return document.querySelector(selector)
}

export const setStyles = (element,styles) => {
   return Object.assign(element.style,styles)
}