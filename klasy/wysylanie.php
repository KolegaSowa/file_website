<?php

class Wysylanie extends Polaczenie
{
	
	public function wysylanie()
	{
		if(isset($_POST['dod']))
		{
			//wyciągnięcie potrzebnych danych pliku
			$ja = $_SESSION['ID'];
			$plik = $_FILES['plik'];
			$plik_nazwa = $_FILES['plik']['name'];
			$plik_rozmiar = $_FILES['plik']['size'];
			$plik_tmp = $_FILES['plik']['tmp_name'];
			$plik_bledy = $_FILES['plik']['error'];

			$sciezka = "../pliki/".$plik_nazwa;
			//wyciągnięcie rozszerzenia pliku
			$podzial_nazwy = explode(".", $plik_nazwa);
			$typ =strtolower(end($podzial_nazwy));

			//przypisanie ikony do pliku
			switch ($typ) 
			{
			case 'doc':
				$ikona = "../obrazki/doc.png";
				break;
			case 'docx':
				$ikona = "../obrazki/docx.png";
				break;
			case 'gif':
				$ikona = "../obrazki/gif.png";
				break;
			case 'jpeg':
				$ikona = "../obrazki/jpeg.png";
				break;
			case 'jpg':
				$ikona = "../obrazki/jpg.png";
				break;
			case 'pdf':
				$ikona = "../obrazki/pdf.png";
				break;
			case 'png':
				$ikona = "../obrazki/png.png";
				break;
			case 'rar':
				$ikona = "../obrazki/rar.png";
				break;
			case 'txt':
				$ikona = "../obrazki/txt.png";
				break;
			case 'zip':
				$ikona = "../obrazki/zip.png";
				break;
			default:
				$ikona = "";
				break;
			}
			
			if (!file_exists("../pliki/".$plik_nazwa)) 
			{
				if($plik_bledy === 0)
				{
					if ($plik_rozmiar < 100000 ) 
					{
					//dodanie wpisu do bazy z plikami
					$dodanie = "INSERT INTO plik(ikona, nazwa, wlasciciel) VALUES('$ikona', '$plik_nazwa', '$ja') ";
					mysqli_query($this->polaczenie, $dodanie);

					//wyslanie kopii pliku do folderu
					move_uploaded_file($plik_tmp, $sciezka);

					}
					else
					{
					print("ZADUŻY PLIK");
					}
				}			
				else
				{
				print("BŁĄD PLIKU");
				}
			}
			else
			print("Proszę zmienić nazwę pliku");
			}
		}
	}

$wys = new Wysylanie;
$wys ->wysylanie();

?>