Para la solucion al ejercicio solicitado se agrego la siguiente linea de codigo

/########################################################################/
if(strpos($this->getNickname(), '-')!==false)
        {
            $errors[]=__('The nickname must not have hyphens');
        }
/########################################################################/

Esta fue agregada en el archivo:  m2git/app/code/Magento/Review/Model/Review.php
exactamente debajo de la linea número 287