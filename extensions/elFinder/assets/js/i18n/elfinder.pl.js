/**
 * Polish translation
 * @author Darek Wapiński <darek@wapinski.us>
 * @version 2010-09-22
 */
(function($) {
    if (elFinder && elFinder.prototype.options && elFinder.prototype.options.i18n)
        elFinder.prototype.options.i18n.pl = {
            /* errors */
            'Root directory does not exists': 'Katalog główny nie istnieje',
            'Unable to connect to backend': 'Nie mogę się połączyć z menedżerem plików',
            'Access denied': 'Dostęp zabroniony',
            'Invalid backend configuration': 'Błędna konfiguracja menedżera plików',
            'Unknown command': 'Nieznane polecenie',
            'Command not allowed': 'Polecenie niedostępne',
            'Invalid parameters': 'Błędne parametry',
            'File not found': 'Pliku nie znaleziono',
            'Invalid name': 'Błędna nazwa',
            'File or folder with the same name already exists': 'Istnieje już plik lub katalog o takiej nazwie',
            'Unable to rename file': 'Nie mogę zmienić nazwy',
            'Unable to create folder': 'Nie mogę stworzyć katalogu',
            'Unable to create file': 'Nie mogę stworzyć pliku',
            'No file to upload': 'Brak pliku do wkopiowania',
            'Select at least one file to upload': 'Wybierz przynajmniej jeden plik do wkopiowania',
            'File exceeds the maximum allowed filesize': 'Dozwolony maksymalny rozmiar pliku został przekroczony',
            'Data exceeds the maximum allowed size': 'Dane przekroczyły dozwolony maksymalny rozmiar',
            'Not allowed file type': 'Niedozolony typ pliku',
            'Unable to upload file': 'Nie mogę wkopiować pliku',
            'Unable to upload files': 'Nie mogę wkopiować plików',
            'Unable to remove file': 'Nie mogę skasować pliku',
            'Unable to save uploaded file': 'Nie mogę zapisać wkopiowanych plików',
            'Some files was not uploaded': 'Kilka plików nie zostało wkopiowanych',
            'Unable to copy into itself': 'Nie mogę wkopiować na ten sam plik',
            'Unable to move files': 'Nie mogę przenieść plików',
            'Unable to copy files': 'Nie mogę skopiować plików',
            'Unable to create file copy': 'Nie mogę stworzyć kopi pliku',
            'File is not an image': 'Plik nie jest obrazkiem',
            'Unable to resize image': 'Nie mogę zmienić rozmiaru obrazka',
            'Unable to write to file': 'Nie mogę zapisać danych w pliku',
            'Unable to create archive': 'Nie mogę stworzyć archiwum',
            'Unable to extract files from archive': 'Nie mogę rozpakować plików z archiwum',
            'Unable to open broken link': 'Nie mogę otworzyć błędego odnoścnika',
            'File URL disabled by connector config': 'Ścieżka do pliku została wyłączona w konfiguracji',
            /* statusbar */
            'items': 'pozycji',
            'selected items': 'zaznaczonych pozycji',
            /* commands/buttons */
            'Back': 'Cofnij',
            'Reload': 'Odśwież',
            'Open': 'Otwórz',
            'Preview with Quick Look': 'Podgląd z QuickLook',
            'Select file': 'Wybierz plik',
            'New folder': 'Nowy folder',
            'New text file': 'Nowy plik tekstowy',
            'Upload files': 'Wkopiuj pliki',
            'Copy': 'Kopiuj',
            'Cut': 'Wytnij',
            'Paste': 'Wklej',
            'Duplicate': 'Zduplikuj',
            'Remove': 'Usuń',
            'Rename': 'Zmień nazwę',
            'Edit text file': 'Edytuj plik tekstowy',
            'View as icons': 'Ikony',
            'View as list': 'Lista',
            'Resize image': 'Przeskaluj obrazek',
            'Create archive': 'Utwórz archiwum',
            'Uncompress archive': 'Odkopiuj z archiwum',
            'Get info': 'Pokaż informacje',
            'Help': 'Pomoc',
            'Dock/undock filemanager window': 'Zminimalizuj/Ukryj menedżera plików',
            /* upload/get info dialogs */
            'Maximum allowed files size': 'Maksymalny rozmiar',
            'Add field': 'Dodaj pozycję',
            'File info': 'Informacje o pliku',
            'Folder info': 'Informacje o katalogu',
            'Name': 'Nazwa',
            'Kind': 'Rodzaj',
            'Size': 'Rozmiar',
            'Modified': 'Zmodyfikowany',
            'Permissions': 'Uprawnienia',
            'Link to': 'Link do',
            'Dimensions': 'Rozmiary',
            'Confirmation required': 'Wymagane potwierdzenie',
            'Are you sure you want to remove files?<br /> This cannot be undone!': 'Czy jesteś pewny/pewna, że chcesz usunąć pliki? <br />Nie będzie można ich odzyskać!',
            /* permissions */
            'read': 'odczyt',
            'write': 'zapis',
            'remove': 'usunięcie',
            /* dates */
            'Jan': 'Sty',
            'Feb': 'Lut',
            'Mar': 'Mar',
            'Apr': 'Kwi',
            'May': 'Maj',
            'Jun': 'Cze',
            'Jul': 'Lip',
            'Aug': 'Sie',
            'Sep': 'Wrz',
            'Oct': 'Paź',
            'Nov': 'Lis',
            'Dec': 'Gru',
            'Today': 'Dzisiaj',
            'Yesterday': 'Wczoraj',
            /* mimetypes */
            'Unknown': 'Nieznany',
            'Folder': 'Folder',
            'Alias': 'Alias',
            'Broken alias': 'Utracony alias',
            'Plain text': 'Tekst',
            'Postscript document': 'Dokument Postscript',
            'Application': 'Aplikacja',
            'Microsoft Office document': 'Dokument Microsoft Office',
            'Microsoft Word document': 'Document Microsoft Word',
            'Microsoft Excel document': 'Document Microsoft Excel',
            'Microsoft Powerpoint presentation': 'Document Microsoft Powerpoint',
            'Open Office document': 'Document Open Office',
            'Flash application': 'Aplikacja Flash',
            'XML document': 'Document XML',
            'Bittorrent file': 'Plik bittorrent',
            '7z archive': 'Archiwum 7z',
            'TAR archive': 'Archiwum TAR',
            'GZIP archive': 'Archiwum GZIP',
            'BZIP archive': 'Archiwum BZIP',
            'ZIP archive': 'Archiwum ZIP',
            'RAR archive': 'Archiwum RAR',
            'Javascript application': 'Aplikacja Javascript',
            'PHP source': 'Document PHP',
            'HTML document': 'Document HTML',
            'Javascript source': 'Document Javascript',
            'CSS style sheet': 'Document CSS',
            'C source': 'Document C',
            'C++ source': 'Document C++',
            'Unix shell script': 'Skrypt powłoki Unix',
            'Python source': 'Document Python',
            'Java source': 'Document Java',
            'Ruby source': 'Document Ruby',
            'Perl script': 'Skrypt Perl',
            'BMP image': 'Obraz BMP',
            'JPEG image': 'Obraz JPEG',
            'GIF Image': 'Obraz GIF',
            'PNG Image': 'Obraz PNG',
            'TIFF image': 'Obraz TIFF',
            'TGA image': 'Obraz TGA',
            'Adobe Photoshop image': 'Obraz Adobe Photoshop',
            'MPEG audio': 'Audio MPEG',
            'MIDI audio': 'Audio MIDI',
            'Ogg Vorbis audio': 'Audio Ogg Vorbis',
            'MP4 audio': 'Audio MP4',
            'WAV audio': 'Audio WAV',
            'DV video': 'Video DV',
            'MP4 video': 'Video MP4',
            'MPEG video': 'Video MPEG',
            'AVI video': 'Video AVI',
            'Quicktime video': 'Video Quicktime',
            'WM video': 'Video WM',
            'Flash video': 'Video Flash',
            'Matroska video': 'Video Matroska',
            // 'Shortcuts' : 'Клавиши',
            'Select all files': 'Zaznacz wszystkie pliki',
            'Copy/Cut/Paste files': 'Kopiuj/Wytnij/Wklej pliki',
            'Open selected file/folder': 'Otwórz zaznaczony plik/folder',
            'Open/close QuickLook window': 'Otwórz/zamknij podgląd',
            'Remove selected files': 'Usuń zaznaczone pliki',
            'Selected files or current directory info': 'Zaznacz pliki lub aktualne info o katalogu',
            'Create new directory': 'Utwórz katalog',
            'Open upload files form': 'Otwórz okno wkopiowywania plików',
            'Select previous file': 'Zaznacz poprzedni plik',
            'Select next file': 'Zaznacz następny plik',
            'Return into previous folder': 'Powróć do pprzedniego folderu',
            'Increase/decrease files selection': 'Zwiększ/zmniejsz zaznaczenie plików',
            'Authors': 'Autorzy',
            'Sponsors': 'Sponsorzy',
            'elFinder: Web file manager': 'elFinder: Menedżer plików',
            'Version': 'Wersja',
            'Copyright: Studio 42 LTD': 'Prawa: Studio 42',
            'Donate to support project development': 'Dotuj prace nad projektem',
            'Javascripts/PHP programming: Dmitry (dio) Levashov, dio@std42.ru': 'Programowanie Javascripts/php: Dmitry (dio) Levashov, dio@std42.ru',
            'Python programming, techsupport: Troex Nevelin, troex@fury.scancode.ru': 'Programowanie Python, pomoc techniczna: Troex Nevelin, troex@fury.scancode.ru',
            'Design: Valentin Razumnih': 'Wygląd: Valentin Razumnyh',
            'Polish localization': 'Polskie tłumaczenie: Darek Wapinski darek(at)wapinski.us 2010',
            'Icons': 'Ikony',
            'License: BSD License': 'Licencja: BSD License',
            'elFinder documentation': 'Dokumentacja elFinder',
            'Simple and usefull Content Management System': 'Prosty i użyteczny CMS',
            'Support project development and we will place here info about you': 'Wesprzyj projekt swoją pracą a umieścimy informację o Tobie',
            'Contacts us if you need help integrating elFinder in you products': 'Skontaktuj się z nami jeśli chcesz zintegrować projekt ze swoim produktem',
            'elFinder support following shortcuts': 'elFinder obsługuje następujące skróty',
            'helpText': 'Potrzebujesz pomocy z menedżerem plików elFinder?<br />Zgłoś się do mnie: Darek Wapiński darek(at)wapinski.us'
        };

})(jQuery);
