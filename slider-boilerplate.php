<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Add Bootstrap CDN -->
</head>
<body>

  <section class="section-wrap">
      <div style="background: #efeaf7;">
  
  
          <div class="container">
  
              <div class="slider-container">
                  <div class="slider-track">
                      <div class="slider-item">Item 1</div>
                      <div class="slider-item">Item 2</div>
                      <div class="slider-item">Item 3</div>
                      <div class="slider-item">Item 4</div>
                      <div class="slider-item">Item 5</div>
                      <div class="slider-item">Item 6</div>
  
                  </div>
              </div>
  
              <style>
                  .slider-container {
                      width: 100%;
                      overflow: hidden;
  
                      padding: 40px 0;
                  }
  
                  .slider-track {
                      display: flex;
                      gap: 10px;
                  }
  
                  .slider-item {
                      height: 100px;
                      background: #7c3aed;
                      color: #fff;
                      display: flex;
                      align-items: center;
                      justify-content: center;
                      border-radius: 8px;
                      font-size: 18px;
                      transition: transform 0.5s linear;
                  }
              </style>
  
              <script>
                  window.addEventListener('load', () => {
                      const track = document.querySelector('.slider-track');
                      let items = Array.from(track.children);
  
                      const maxVisible = 4;
                      const totalItems = items.length;
  
                      // Determine how many should be visible
                      const visibleItems = Math.min(totalItems, maxVisible);
  
                      // Apply dynamic width
                      items.forEach(item => {
                          item.style.flex = `0 0 calc((100% - ${(visibleItems - 1) * 10}px) / ${visibleItems})`;
                      });
  
                      let itemWidth = items[0].offsetWidth + 10;
                      let offset = 0;
  
                      function scrollNext() {
                          // Only scroll if more than visible items
                          if (totalItems <= maxVisible) return;
  
                          offset += itemWidth;
  
                          track.style.transition = 'transform 0.5s linear';
                          track.style.transform = `translateX(-${offset}px)`;
  
                          setTimeout(() => {
                              track.appendChild(track.firstElementChild);
  
                              track.style.transition = 'none';
                              offset -= itemWidth;
                              track.style.transform = `translateX(-${offset}px)`;
                          }, 500);
                      }
  
                      setInterval(scrollNext, 3000);
                  });
              </script>
          </div>
      </div>
  </section>
    
</body>
</html>
