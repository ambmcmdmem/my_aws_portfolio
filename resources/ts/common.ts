export const selectImgDisplay = (imgInputElementId: string, displayElementId: string) => {
  const imgInputElement = document.getElementById(imgInputElementId);
  const displayElement = (<HTMLImageElement>document.getElementById(displayElementId));

  if(imgInputElement === null || displayElement === null) {
    alert('Element can\'t find.');
    return;
  }

  imgInputElement.addEventListener('change', function(imgInputEvent) {
    const fileTarget = (<HTMLInputElement>imgInputEvent.target);
    if(fileTarget.files === null) {
      alert('file can not find');
      return;
    }

    const file = fileTarget.files[0];

    const imgReader = new FileReader();

    imgReader.onload = function(imgReaderEvent) {
      if(imgReaderEvent.target === null) {
        alert('Img can not find.');
        return;
      }

      if(typeof imgReaderEvent.target.result === 'string') {
        displayElement.setAttribute('src', imgReaderEvent.target.result);
      }
    }

    imgReader.readAsDataURL(file);
  });
};