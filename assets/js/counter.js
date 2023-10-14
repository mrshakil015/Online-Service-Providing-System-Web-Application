//counter design
document.addEventListener("DOMContentLoaded", () => {
    function counter(id, start, end, duration){
      let obj = document.getElementById(id),
      current = start,
      range = end - start,
      increment = end > start ? 1 : -1,
      step = Math.abs(Math.floor(duration / range)),
      timer = setInterval(() => {
        current += increment;
        obj.textContent = current;
        if(current == end){
          clearInterval(timer);
        }
      }, step);
    }
    counter("count1",700,1287,150);
    counter("count2",5000,5786,150);
    counter("count3",500,1040,150);
  });