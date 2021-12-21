export const selectImgDisplay = (imgInputElementId: string, displayImgWrapElementId: string) => {
  const imgInputElement = document.getElementById(imgInputElementId);
  const displayImgWrapElement = document.getElementById(displayImgWrapElementId);

  if(imgInputElement === null || displayImgWrapElement === null) {
    alert('Element can\'t find.');
    return;
  }

  imgInputElement.addEventListener('change', function(imgInputEvent) {
    while(displayImgWrapElement.lastChild) {
      displayImgWrapElement.removeChild(displayImgWrapElement.lastChild);
    }

    const fileTarget = (<HTMLInputElement>imgInputEvent.target);
    if(fileTarget.files === null) {
      alert('file can not find');
      return;
    }

    const imgInputFiles = fileTarget.files;
    for(let file_i = 0; file_i < imgInputFiles.length; file_i++) {
      const imgReader = new FileReader();
      const imgInputFile = imgInputFiles[file_i];

      imgReader.onload = function(imgReaderEvent) {
        if(imgReaderEvent.target === null) {
          alert('Img can not find.');
          return;
        }

        if(typeof imgReaderEvent.target.result === 'string') {
          const displayImgElement = document.createElement('img');
          displayImgElement.id = 'imgInputFile_' + file_i;
          displayImgElement.width = 200;
          displayImgElement.setAttribute('src', imgReaderEvent.target.result);
          displayImgWrapElement.appendChild(displayImgElement);
        } else {
          alert('imgReaderEvent.target.result is not string.');
        }
      }

      if(imgInputFile) {
        imgReader.readAsDataURL(imgInputFile);
      }
    }
  });
};