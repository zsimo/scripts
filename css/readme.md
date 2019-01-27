- Media breakpoints
    ```css
    @media screen and (min-width: 24.15em) {
      #small
    }
    @media screen and (min-width: 43.75em) {
      #medium
    }
    @media (min-width: 60.25em) {
      #large
    }
    @media (min-width: 75em) {
      #xlarge
    }
    ```
- Font sizes
    ```txt
    - 120, 96, 72, and 48 headlines
    - 36 and 24 subheads
    - 12, 11, 10, and 9 point text
    - 8 and 6 point footnotes and other less important information
    ```
    
- general sibling combinator [see](https://www.youtube.com/watch?v=-_QcUmyLdDw)
    ```css
    input[type=checkbox]:checked ~ .selector {
      background: red
    }
    ```
  
 - moltiplicare le classi per aumentare la specificità (al posto di !important)
     ```css
       .hidden.hidden {
           display: block;
       }
     ```
     
- [currentColor](https://www.quirksmode.org/css/color/currentcolor.html)
   ```css
     b {
      border-color: currentColor;
     }
   ```
   
- viewport units
   ```css
     vw Relative to 1% of the width of the viewport
     vh Relative to 1% of the height of the viewport*
   ```
 