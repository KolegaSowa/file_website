
div.ondragover = div.ondragenter = function(evt) 
{
  evt.preventDefault();
};

div.ondrop = function(evt) {
  plik.files = evt.dataTransfer.files;
  const dT = new DataTransfer();
  dT.items.add(evt.dataTransfer.files[0]);
  dT.items.add(evt.dataTransfer.files[3]);
  plik.files = dT.files;

  evt.preventDefault();
};