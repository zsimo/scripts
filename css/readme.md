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
- Font definition
    ```css
    @import url('https://fonts.googleapis.com/css?family=Poppins:400');
    
    html {font-size: 100%;} /*16px*/
    
    body {
      font-family: 'Poppins', sans-serif;
      font-weight: 400;
      line-height: 1.75;
      color: #000000;
    }
    
    p {margin-bottom: 1rem;}
    
    h1, h2, h3, h4, h5 {
      margin: 3rem 0 1.38rem;
      font-family: 'Poppins', sans-serif;
      font-weight: 400;
      line-height: 1.3;
    }
    
    h1 {
      margin-top: 0;
      font-size: 3.052rem;
    }
    
    h2 {font-size: 2.441rem;}
    
    h3 {font-size: 1.953rem;}
    
    h4 {font-size: 1.563rem;}
    
    h5 {font-size: 1.25rem;}
    
    small, .text_small {font-size: 0.8rem;}

    ```
- Font definition (type scaled) [see](https://codepen.io/jen4web/pen/YzJVzBB), [see](https://typescale.com/)
  ```css
    --base-size: 1rem;
    --scale: 1.25;
    --h1: calc(var(--h2) * var(--scale));
    --h2: calc(var(--h3) * var(--scale));
    --h3: calc(var(--h4) * var(--scale));
    --h4: calc(var(--h5) * var(--scale));
    --h5: calc(var(--h6) * var(--scale));
    --h6: var(--base-size);

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

- add border box sizing to the page right from the start
   ```css
    html {
      box-sizing: border-box;
    }
    *, *:before, *:after {
      box-sizing: inherit;
    }
   ```

- responsive img
   ```css
    img {
        width: 100%;
        max-width: 100%;
    }
   ```
