@extends('dashboard.master')
@section('body')
<body dir="rtl" class="bg-gray-100 dark:bg-gray-800 rounded-2xl h-screen overflow-hidden relative font-body">
    <div class="flex items-start justify-between">
        <!-- Nav Bar -->
        <div class="h-screen hidden lg:block my-4 mr-4 shadow-lg relative w-80">
            <div class="bg-white h-full rounded-2xl dark:bg-gray-700">
                <div class="flex items-center justify-center pt-6">
                    <img height=75 width="150" alt="logo" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBzdGFuZGFsb25lPSJubyI/Pgo8IURPQ1RZUEUgc3ZnIFBVQkxJQyAiLS8vVzNDLy9EVEQgU1ZHIDIwMDEwOTA0Ly9FTiIKICJodHRwOi8vd3d3LnczLm9yZy9UUi8yMDAxL1JFQy1TVkctMjAwMTA5MDQvRFREL3N2ZzEwLmR0ZCI+CjxzdmcgdmVyc2lvbj0iMS4wIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciCiB3aWR0aD0iMTI4MC4wMDAwMDBwdCIgaGVpZ2h0PSI2NDAuMDAwMDAwcHQiIHZpZXdCb3g9IjAgMCAxMjgwLjAwMDAwMCA2NDAuMDAwMDAwIgogcHJlc2VydmVBc3BlY3RSYXRpbz0ieE1pZFlNaWQgbWVldCI+CjxtZXRhZGF0YT4KQ3JlYXRlZCBieSBwb3RyYWNlIDEuMTUsIHdyaXR0ZW4gYnkgUGV0ZXIgU2VsaW5nZXIgMjAwMS0yMDE3CjwvbWV0YWRhdGE+CjxnIHRyYW5zZm9ybT0idHJhbnNsYXRlKDAuMDAwMDAwLDY0MC4wMDAwMDApIHNjYWxlKDAuMTAwMDAwLC0wLjEwMDAwMCkiCmZpbGw9IiMwMDAwMDAiIHN0cm9rZT0ibm9uZSI+CjxwYXRoIGQ9Ik0zNzQ1IDUxNjkgYy0yNSAtMjMgLTU0IC01NyAtNjYgLTc2IC0xNiAtMjYgLTI0IC0zMSAtMzQgLTIzIC03IDYKLTMwIDE5IC01MCAyOSAtMzggMTggLTM4IDE4IC03OSAtNSAtMjMgLTEzIC03NCAtMzEgLTExNSAtNDAgLTYyIC0xNCAtNzUgLTE0Ci04MiAtMyAtNSA5IC05IDEwIC05IDIgMCAtMTYgLTY4IC01NiAtODQgLTUwIC0zMyAxMyAtNDMgLTE4MCAtMjEgLTM5MyAyNQotMjUyIDIwIC00NTYgLTE0IC01MTggLTEwIC0xOSAtODAgNTAyIC04NyA2NTYgLTQgNzcgLTEyIDEzOSAtMTkgMTQ5IC0zOCA1MQotNzIgLTU2IC01NSAtMTcyIDIwIC0xMzkgMjIgLTQyNSA2IC03NTcgLTIwIC00MTkgLTIwIC01MjcgNCAtODkzIDExIC0xNjUgMjAKLTM4MSAyMCAtNDgwIC0xIC0xNTkgLTIgLTE3NyAtMTUgLTE1NSAtMTIgMjIgLTE0IDIzIC0yMCA3IC00IC05IC01IC0yNyAtMgotMzggMyAtMTIgMSAtMzMgLTQgLTQ3IC0xNyAtNDUgLTEyIC0xNzIgMTEgLTI3MiAxNiAtNjggMjMgLTEzOCAyNiAtMjQ1IDIKLTgyIDEzIC0yMjcgMjQgLTMyMSAxMSAtOTQgMjAgLTE5MyAyMCAtMjE5IGwwIC00OCAyNSAyMyBjMjkgMjcgMzAgMjcgNDMgLTIwCjEwIC0zMiAxMSAtMzMgMTcgLTEyIDUgMTUgMTMgMjEgMjQgMTcgOSAtMyA2OCAtMTIgMTMxIC0yMCAxNjAgLTIxIDMyMCAtMjAKNDIyIDQgMzA4IDcyIDU0MSA5MyAxMTMzIDEwMSAyNzUgMyA0OTAgNyA0NzkgOCAtMzEgMyAtNDYgMjYgLTM4IDU3IDYgMjUgNQoyNyAtMTYgMjAgLTM3IC0xMiAtMzI3IC05IC01NjAgNSAtMTE4IDcgLTI4NiAxMSAtMzc0IDggbC0xNTggLTQgNTMgMTggYzE0NAo1MCAzMjQgNTcgNjI0IDI0IDExMSAtMTIgMTMzIC0xMiAzMDQgMTAgMTU5IDIwIDE5MyAyNyAyNDcgNTQgMzQgMTcgNzQgNDQgODcKNTkgMzEgMzcgNDMgMTE1IDIyIDE0NyAtMTQgMjEgLTEyIDIzIDM1IDQzIDI3IDEyIDYxIDIxIDc1IDIxIDIyIDAgMjUgNCAyMAoxOSAtNCAxNCAxIDI1IDE5IDM2IGwyNSAxNyAtMzUgNjIgYy0xOSAzNSAtMzQgNzIgLTM0IDgzIDAgMjcgLTkgMzQgLTMyIDIyCi0yNiAtMTQgLTQ1IDMgLTU5IDU1IC0xOCA2NyAtMTQgNjYgLTE4MiA1OSAtMTA0IC00IC0yMjggMCAtMzkyIDEyIC0zNTkgMjcKLTQ0MCAyNiAtNjIxIC0xMyAtMTQ0IC0zMSAtMjg0IC00MiAtMjg0IC0yMyAwIDEzIDc1IDc4IDk5IDg2IDQ1IDE0IDE4IDIxCi01MSAxMyAtMTA5IC0xMyAtMTkwIC0xMyAtMjE1IDAgbC0yMiAxMiAtMSA0OTMgYzAgNDUyIDEgNDk5IDE5IDU4MiA1NSAyNTMKNTQgNDYxIC01IDk4MCAtNDQgMzg3IC01MyA0OTYgLTU5IDY4NCAtMyAxMTEgLTEwIDE5MCAtMTYgMTk4IC0yMSAyNCAtNTggMTQKLTEwNCAtMjh6Ii8+CjxwYXRoIGQ9Ik0xMDk5OCA1MTkxIGMtMTAwIC0yMiAtMjQzIC02NSAtNDA4IC0xMjMgLTYzIC0yMiAtMTQwIC00MyAtMTcxIC00NQotNTAgLTUgLTU4IC0zIC03MiAxNyAtMTQgMjEgLTIwIDIyIC04OSAxNSAtNTIgLTUgLTgzIC0xNCAtMTA4IC0zMCAtMTkgLTEzCi02NiAtMzggLTEwNSAtNTYgLTE4MyAtODIgLTIxNSAtOTkgLTI1NCAtMTM1IC0yMyAtMjAgLTQ3IC00NiAtNTMgLTU3IC0xMgotMjMgLTEyIC0yMyA4MCA0MCAzNSAyNCA3MyA0MyA4NSA0MyAxOSAwIDE2IC01IC0yMCAtNDIgLTIyIC0yNCAtNDMgLTU1IC00NwotNzAgLTMgLTE0IC0xNyAtMzkgLTMwIC01NSAtMzkgLTQ2IC03NiAtMTA1IC03NiAtMTE5IDAgLTggNiAtMTQgMTQgLTE0IDggMAoxNyAtNCAyMCAtOSAzIC01IC01OSAtMTg4IC0xMzggLTQwNyAtNzkgLTIyMCAtMTc1IC00OTMgLTIxNCAtNjA5IC03MSAtMjA4Ci03MSAtMjExIC04MyAtMzcwIC00NSAtNjE5IDEwOSAtMTE1OCA0MzggLTE1MjYgNzUgLTg0IDE3NyAtMTgwIDIwOCAtMTk2IDQwCi0yMSAyNzIgLTkzIDM3NSAtMTE3IDE5NiAtNDYgMzIxIC02MCA1NDAgLTYwIDIwNCAtMSAyNjUgNiAzNzAgNDEgNjggMjIgMjUyCjEyNSA0MjUgMjM4IDQ0IDI5IDEzNSA3NiAyMDMgMTA1IDY3IDI5IDE0MiA2NyAxNjUgODQgbDQyIDMxIC00MCAzIGMtNjcgNQotNzQgMTIgLTM0IDMyIDkyIDQ4IDE3MCAxODUgMTk5IDM1MyA2IDM0IDIwIDkxIDMxIDEyNiAxMCAzNSAxOSA3OCAxOSA5NiAwCjMxIDEgMzIgNTIgMzggMzcgNSA1OSAxNCA3NSAzMSAyNiAyOCAxMjAgNjYgMTYzIDY2IDMyIDAgNDEgMTYgMTMgMjMgLTE2IDQKLTE2IDUgMiAxMyAxMSA1IDM5IDIyIDYyIDM4IGw0MyAyOSAtMzAgMzQgYy0xNyAxOCAtMzAgMzYgLTMwIDM4IDAgMiAyMSAxMwo0NiAyNCBsNDYgMjEgLTQgNTIgYy0yIDM3IDEgNTIgOSA1MSA4IC0yIDcgNiAtMyAyNSAtNyAxNSAtMTQgMzcgLTE0IDUwIDAgMTQKLTYgMjIgLTE2IDIyIC0zMSAwIDUgMjcgNTEgMzkgNDQgMTEgNzggNDYgNTggNjAgLTYgMyAtMTMgMTggLTE3IDM0IC02IDI2IC05CjI3IC02MiAyNSAtNDUgLTIgLTU5IDEgLTY4IDE1IC05IDE1IC03IDIxIDEyIDM1IDEzIDEwIDIxIDI0IDE3IDMyIC00IDEyIC0zNQoxNiAtMTQ4IDIwIC0yNTQgOCAtMzE3IDUgLTM3MCAtMTggLTU3IC0yNiAtNTggLTI2IC01NSAtMTAgNSAyMCAtNzEgMjcgLTE5MgoxNyAtMjQwIC0xOSAtNzMyIC05NCAtODAwIC0xMjIgLTE5IC04IC02MSAtMjAgLTkzIC0yNyAtMzIgLTYgLTY5IC0yMiAtODQKLTM0IC0yMSAtMTggLTI0IC0yNyAtMTggLTU0IDMgLTE3IDEwIC0zNCAxNCAtMzcgNSAtMiAzMyAxIDYzIDcgMzAgNiA2MyA4IDczCjUgMTcgLTcgMTcgLTggMCAtMjcgLTEwIC0xMSAtMjkgLTIwIC00MiAtMjAgLTEzIDAgLTM0IC0xMSAtNDYgLTI1IC0xMiAtMTQKLTM5IC00MyAtNTkgLTY1IC0zOSAtNDEgLTQyIC02NCAtNyAtNzUgMTEgLTQgMTcgLTExIDE0IC0xNiAtNCAtNSAxIC0xMiA5Ci0xNSAyMiAtOCAyMCAtMjQgLTIgLTI0IC0xMSAwIC0yNyAtOSAtMzcgLTIwIC0xMCAtMTEgLTI5IC0yMCAtNDEgLTIwIC0yMiAwCi0yMyAtMiAtMTIgLTI2IDkgLTIwIDkgLTMwIC0xIC00NiAtNyAtMTEgLTExIC0yMSAtOSAtMjIgMiAtMiA3NSAtMTAgMTYzIC0yMAoyMjggLTI0IDIyOSAtMjUgODkgLTU4IC02NSAtMTUgLTE0MSAtMzEgLTE2NyAtMzQgLTM0IC01IC00NyAtMTEgLTQzIC0yMCAzCi03IC00IC0yMCAtMTUgLTI3IC0xOCAtMTMgLTE1IC0xNSAzMyAtMjAgNzkgLTEwIDE0MiAtOSAyNTEgNSA3MyA5IDEwMCA5IDEwNQoxIDUgLTggMjMgLTggNjcgMiAzNyA5IDYzIDExIDcwIDUgNyAtNiAxNiAtNSAyMyAyIDYgNiAxOCA4IDI3IDQgMTQgLTUgMTYKLTE1IDEwIC01OSAtNCAtMjggLTE3IC03OSAtMzAgLTExMiAtMTMgLTMzIC0yNiAtNzMgLTMwIC05MCAtMTMgLTYwIC02MSAtMTIzCi0yMDMgLTI2NyAtMTM1IC0xMzcgLTE0OSAtMTQ4IC0xOTcgLTE1OSAtNDggLTExIC01OCAtOSAtMTYxIDI2IC0xNDkgNTEgLTE1Mgo1MyAtMjQwIDE1MCAtMTc5IDE5NSAtMzAzIDM5OCAtMzYwIDU5MCAtMjMgNzcgLTI4IDExMiAtMzAgMjM5IC0yIDgyIC02IDE1MQotOSAxNTQgLTExIDExIC00IDE5OCAxMCAzMDEgMjYgMTcyIDcxIDMyNyAxOTcgNjYzIDY0IDE3NCAxMjQgMzUwIDEzMyAzOTEgMjAKOTYgNTQgMTk2IDk1IDI3NyAzOSA3NyAxMzYgMjIyIDE1NiAyMzMgOSA1IDM1IC0zIDcyIC0yNSAzMSAtMTggNjIgLTMyIDY3Ci0zMCAxMCAyIDE0NiAtMTA0IDE3NSAtMTM2IDggLTkgMzUgLTMwIDU5IC00NyA1MCAtMzQgODUgLTc2IDExNyAtMTQzIDI1IC01MAoyOCAtNDQgMTUgMjYgLTEwIDQ5IC0zIDUzIDI2IDE0IDU5IC04MCA5NyAtMTgyIDEyOSAtMzU0IDE5IC0xMDMgNjkgLTE4OCAxMTAKLTE4OCAyIDAgNCA3IDQgMTUgMCAyOSA0NiA0OCAxMDEgNDEgNTUgLTcgOTkgMTAgOTkgMzkgMCAxMiAyOCAzNSA0MyAzNSAzIDAKMjUgLTE2IDQ5IC0zNiBsNDMgLTM3IDUgNDQgYzYgNTYgMjUgNjAgOTAgMjAgNTQgLTMzIDcwIC0zOCA3MCAtMjAgMCA2IC0yMgoxNDAgLTQ5IDI5OCAtNzAgNDAxIC0xMTkgNTMwIC0yNTMgNjYzIC0zMyAzMiAtNTkgNjAgLTU3IDYyIDkgOSA5OCAtMjkgMTQ4Ci02MiAxMDcgLTcxIDE3MSAtMTk0IDIyNiAtNDM3IDMwIC0xMzUgNTkgLTIzOSA4MiAtMzAyIDE0IC0zOSAxOSAtNDMgNDkgLTQzCjMzIDAgMzQgMiAzNCAzOCAtMSA1MCAtMjkgMjExIC03NiA0MjYgbC0zOCAxNzcgLTc5IDgwIGMtMTM1IDEzNCAtMjU5IDIxOAotNDM2IDI5MiAtMjM5IDEwMCAtNDI0IDEyNyAtNjAzIDg4eiBtMTEwMSAtMjg4OCBjLTE5IC0zOSAtMjQgLTQ0IC0zMCAtMjcgLTQKMTAgLTggMzYgLTggNTYgLTEgMzEgMyAzOCAyNyA0NiAyMyA3IDI4IDYgMzAgLTEwIDIgLTEwIC03IC00MCAtMTkgLTY1eiIvPgo8cGF0aCBkPSJNMTA4OCA1MTczIGM2MyAtOCAzMSAtMjAgLTcwIC0yNiAtNTcgLTMgLTE1NyAtMTYgLTIyMyAtMjggLTEyNCAtMjMKLTE1OSAtMjUgLTIxMCAtMTQgLTQ4IDEwIC04MSAtMjIgLTg5IC04NyAtOCAtNjQgLTI1IC0xMTggLTM2IC0xMTggLTQgMCAtMTQKMjkgLTIxIDY1IC0xNCA3MiAtMjggODEgLTcwIDQ2IC0yMiAtMTggLTI2IC0xOCAtNDEgLTQgLTE3IDE1IC0xOCAxMSAtMTggLTc1CjAgLTI0NSAtNDcgLTY1NSAtMTU1IC0xMzQyIC00MSAtMjYxIC04MyAtNTQ1IC05NCAtNjMwIC01MiAtNDAxIC03MiAtODI2IC01MAotMTA0MCA4IC03NCAxMyAtMTgwIDEzIC0yMzUgbC0xIC0xMDAgNDEgMyBjMjIgMiA0OCAxMSA1OCAxOSAyOCAyNSA1OCAxMTAgNjYKMTg1IGw4IDczIDE4IC0zNCBjMTQgLTI3IDE2IC00NSAxMSAtOTMgLTkgLTc4IDYgLTExOCA0NSAtMTE4IDE2IDAgMzAgLTcgMzQKLTE1IDMgLTggMTMgLTE1IDIxIC0xNSA5IDAgNTggLTEzIDEwOCAtMjkgNDQxIC0xNDIgODI0IC0xNjggMTExNyAtNzUgODggMjcKMTk1IDc3IDI2MiAxMjEgNDMgMjkgNjQgMjQgMjcgLTYgLTEyNCAtMTAyIC0zOTUgLTE5NiAtNzEwIC0yNDcgbC0xMDYgLTE3Ci0yMDYgMzQgYy0xNTYgMjYgLTIwNyAzMSAtMjA3IDIyIDAgLTcgLTUgLTEzIC0xMSAtMTMgLTYgMCAtOSA2IC02IDEzIDIgOAotMzEgMjEgLTEwMiA0MCAtNTggMTUgLTEzNCA0MSAtMTY5IDU3IGwtNjMgMzAgNDMgLTQ5IGM0MiAtNDggNDYgLTUwIDE3MyAtODUKNDI0IC0xMTYgNzM2IC0xMjYgMTAxNCAtMzIgNjkgMjMgNDU5IDI2NiA2MjQgMzg5IDk3IDcyIDIzMiAyMDYgMjQwIDIzOSA3IDI4CjMzIDU2IDEwMCAxMTEgNTAgNDEgNjEgNjMgMjUgNTEgLTIyIC03IC0yMiAtNyAtNCAyMiAxMCAxNiAzMCA0MiA0NSA1NyAxOCAyMAoyMSAyNiA5IDIyIC0yOSAtMTEgLTMxIDE3IC05IDEyOCAxMSA1NyAxNyAxMTQgMTQgMTI1IC05IDM0IDIxIDY4IDc1IDg2IDI4IDkKNTcgMjUgNjYgMzUgMTQgMTYgMTUgMjIgMiA1OCAtMzUgOTggLTExMCAyMTYgLTE5NSAzMDcgLTYyIDY1IC0zMjcgMjk4IC0zNTcKMzEzIC0xMCA2IC0zNSAxMyAtNTUgMTcgLTIxIDQgLTQ5IDE2IC02MyAyNyAtMjQgMTkgLTI1IDIyIC0xMiA0NyAxOSAzNiA1OQo3MiAxMjggMTE2IDMxIDIwIDYwIDQxIDY0IDQ4IDcgMTIgLTE1IC0xIC03MSAtMzkgLTI2IC0xNyAtNjUgLTE3IC02NSAxIDAgOAoyMCAzMSA0NSA1MSAyNSAyMSA0MiA0MiAzOSA0NyAtMyA1IDEyIDM2IDM1IDY4IDMwIDQyIDQxIDY4IDQxIDk0IGwwIDM3IC0zMAotMTYgYy0yOSAtMTUgLTMxIC0xNSAtNDAgMTAgLTEzIDM0IC0xMyA0MCAzIDU0IDggNiAxOSAyOCAyNSA1MCAxMiAzOCAzMyA2MQoxMzIgMTQwIDQxIDMzIDg2IDExMyA3NCAxMzMgLTMgNSAzIDEyIDE1IDE1IDIyIDYgMjcgMjggMTEgNTMgLTYgMTAgLTQgMjAgNwozMiAxNSAxNyAxNCAyMyAtMTYgOTAgLTUwIDExNCAtMTUyIDI1OSAtMjMzIDMzMCAtMzkgMzUgLTExOCAxMDcgLTE3NSAxNjAKLTg5IDgzIC0xMjIgMTA2IC0yMTYgMTUyIC0xMjkgNjQgLTIzMCA5OSAtMzYyIDEyNiAtMTAxIDIyIC0yNTkgNDEgLTMxNSAzOApsLTM1IC0xIDMzIC00eiBtLTE3OCAtOTMgYzAgLTUgLTIgLTEwIC00IC0xMCAtMyAwIC04IDUgLTExIDEwIC0zIDYgLTEgMTAgNAoxMCA2IDAgMTEgLTQgMTEgLTEweiBtLTM3MCAtNzAgYzAgLTUgLTQgLTEwIC0xMCAtMTAgLTUgMCAtMTAgNSAtMTAgMTAgMCA2IDUKMTAgMTAgMTAgNiAwIDEwIC00IDEwIC0xMHogbTM2MCAtNDMwIGMwIC00MCAtMyAtNTAgLTE2IC01MCAtMTQgMCAtMTUgNyAtMTAKMzggMyAyMCA2IDQzIDYgNTAgMCA2IDUgMTIgMTAgMTIgNiAwIDEwIC0yMiAxMCAtNTB6IG0zMTAgMTAgYzg1IC0xMiAxODQgLTMwCjIyMCAtNDAgODMgLTI1IDE3NCAtNzggMjI1IC0xMzMgMjIgLTIzIDU3IC01NSA3NyAtNzEgMzcgLTI3IDU2IC02MSA0MyAtNzQKLTMgLTQgLTQxIDMwIC04MyA3NSAtNDUgNDggLTg3IDg0IC0xMDIgODYgLTE0IDMgLTUyIDkgLTg1IDE0IC0zMyA1IC0xNjAgMjcKLTI4MiA0OCBsLTIyMyAzOSAwIDQ0IGMwIDQyIDEgNDMgMjggMzggMTUgLTMgOTcgLTE1IDE4MiAtMjZ6IG0tNzU0IC0yNCBjMwotNyAtMiAtMjkgLTEwIC00NyBsLTE0IC0zNCAtMSA0OCBjLTEgNDQgMTMgNjQgMjUgMzN6IG00MzEgLTEyNSBjLTUzIC00MjMKLTkwIC02MzAgLTExOSAtNjU2IC04IC03IC05IC01IC00IDkgMTAgMzAgNjQgNDIwIDc2IDU1NiAxNCAxNDkgMTUgMTUxIDM2CjE0MyAxMyAtNSAxNSAtMTUgMTEgLTUyeiBtMjM4IDI5IGMxNzEgLTI1IDM2NiAtODggNDgwIC0xNTUgNzIgLTQyIDE1OCAtMTE4CjE5NSAtMTczIDE5IC0yOCA0MCAtNTIgNDUgLTUyIDEyIC0xIDc2IC0xMjggNzUgLTE1MCAwIC0xMiAtMjAgLTE5IC03OCAtMjcKLTQzIC03IC0xOTEgLTM5IC0zMjggLTczIC0yOTkgLTc0IC0zNzAgLTg3IC01MjEgLTk2IGwtMTE1IC03IDYgNTQgYzQgMzAgMjAKMTI0IDM2IDIwOSA0MyAyMjYgNjAgMzM5IDYwIDM5NSAwIDgyIDcgOTYgNDQgOTAgMTcgLTMgNjMgLTEwIDEwMSAtMTV6IG0tNjc5Ci00NyBjLTE3IC01NCAtMTM2IC04MzkgLTE3NiAtMTE1OCAtNjUgLTUxNiAtODMgLTc3MiAtNzggLTExMTcgMiAtMjAzIDAgLTI1NQotOSAtMjQ1IC0yMCAxOSAtMjggMzcwIC0xNCA2MDIgMTkgMzI0IDQ0IDUxOCAxNjEgMTI5MCAzMyAyMTUgNjcgNDQ3IDc2IDUxOAoxMyA5NSAyMSAxMjcgMzEgMTI3IDkgMCAxMiAtNyA5IC0xN3ogbTI3NCAtOTMzIGMwIC01IC00IC0xMCAtMTAgLTEwIC01IDAKLTEwIDUgLTEwIDEwIDAgNiA1IDEwIDEwIDEwIDYgMCAxMCAtNCAxMCAtMTB6IG0xNDUgLTMwIGMzIC02IC00IC0xMCAtMTcgLTEwCi0xOCAwIC0yMCAyIC04IDEwIDE5IDEyIDE4IDEyIDI1IDB6IG0xMTAzIC0zMCBjLTMyIC0zOSAtNzIgLTYwIC04NiAtNDUgLTQgNAotMiAxMCA0IDEyIDcgMiAzNCAxOSA2MCAzOCAyNyAxOSA1MCAzNSA1MiAzNSAyIDAgLTEyIC0xOCAtMzAgLTQweiBtNDggLTQyMApjMTUgLTYgMjUgLTEzIDIyIC0xNSAtNiAtNiAtOTggMjUgLTk4IDMyIDAgNiAzNyAtMiA3NiAtMTd6IG0tMjY2IC0xODUgYzkyCi0yMSAyMjIgLTgxIDI3NSAtMTI5IGw0MCAtMzYgLTQ4IDIwIGMtMTc1IDcyIC0zNzIgMTA5IC02MTcgMTE3IC0yMjUgNyAtMzgxCi03IC02MjAgLTUzIGwtMzUgLTcgMTkgMjEgYzI5IDMzIDY0IDQwIDMzNiA2MSAxNDAgMTIgMjcxIDIzIDI5MCAyNSA3MSA5IDI4NwotMyAzNjAgLTE5eiBtLTIwMCAtOTAgYzE1NyAtMjEgMjUzIC01MCAzODAgLTExMyAxMjAgLTU5IDEyMCAtNjAgMTg4IC0xNzMKbDIyIC0zNyAtMTIyIC04MCBjLTM2MSAtMjM1IC02MjkgLTMzNCAtOTA4IC0zMzUgLTEzMCAwIC0yMzEgMTYgLTMyNSA1MiBsLTUwCjE5IC0zIDMxMCAtMiAzMTAgMjcgNiBjMjY0IDUyIDU4OCA2OSA3OTMgNDF6IG0tOTIzIC0yNTIgYy0zIC05OCAtMTAgLTE5MQotMTUgLTIwOCAtNiAtMjAgLTQgLTQ3IDUgLTgzIDE0IC01MyAxMCAtOTIgLTggLTkyIC0xOSAwIC0yNiA0NiAtMjEgMTI4IDQgNzIKMiA4NyAtMTUgMTEwIC0xOCAyNCAtMTggMzEgLTcgNjIgNyAxOSAxMyAzMSAxMyAyNyAxIC01IDYgLTUgMTIgLTEgOCA1IDggOCAwCjE0IC05IDUgLTkgMzEgLTEgMTAxIDEzIDEwOSAxNSAxMTkgMzEgMTE5IDkgMCAxMCAtNDYgNiAtMTc3eiBtMTM1NCAtNzgzCmMtMTMgLTExIC0yOCAtMjAgLTM1IC0yMCAtNiAwIDAgOSAxNCAyMCAzMyAyNiA1MiAyNSAyMSAweiBtLTg2IC01OSBjLTMgLTYKLTExIC0xMSAtMTcgLTExIC02IDAgLTYgNiAyIDE1IDE0IDE3IDI2IDEzIDE1IC00eiBtLTI0NSAtODEgYy04IC01IC0xOSAtMTAKLTI1IC0xMCAtNSAwIC0zIDUgNSAxMCA4IDUgMjAgMTAgMjUgMTAgNiAwIDMgLTUgLTUgLTEweiBtLTEyODAgLTEyMCBjMCAtNQotNCAtMTAgLTEwIC0xMCAtNSAwIC0xMCA1IC0xMCAxMCAwIDYgNSAxMCAxMCAxMCA2IDAgMTAgLTQgMTAgLTEweiIvPgo8cGF0aCBkPSJNMTAyNSAyNDk5IGMtMjIgLTEwIC0yOSAtMTYgLTE1IC0xMyAzOCAxMCA4NyAzMiA3MCAzMiAtOCAwIC0zMyAtOAotNTUgLTE5eiIvPgo8cGF0aCBkPSJNNTA2IDUxNDEgYy0zIC00IDYgLTYgMTkgLTMgMTQgMiAyNSA2IDI1IDggMCA4IC0zOSA0IC00NCAtNXoiLz4KPHBhdGggZD0iTTQwMTAgNTA3NSBjMCAtMTkgNSAtMzUgMTAgLTM1IDYgMCAxMCAxNiAxMCAzNSAwIDE5IC00IDM1IC0xMCAzNQotNSAwIC0xMCAtMTYgLTEwIC0zNXoiLz4KPHBhdGggZD0iTTc0OTYgNTAzNyBjLTM5IC0xMCAtMTAwIC0yNCAtMTM2IC0zMSAtMzYgLTcgLTExNiAtMjkgLTE3NyAtNDkKLTExNCAtMzcgLTE4MCAtNDUgLTIyOCAtMjcgLTI0IDkgLTQ2IC0yIC0yMjMgLTExMSAtMTg0IC0xMTMgLTM1NSAtMjMxIC0zODIKLTI2MyAtOCAtMTEgLTggLTE2IDQgLTIzIDEzIC03IDUgLTIxIC00MCAtNzggLTE0MSAtMTc2IC0yNzEgLTQwNCAtMzI4IC01NzYKLTMzIC0xMDAgLTU4IC0yNTUgLTU1IC0zNDkgMiAtNzYgLTM0IC0yNzAgLTUwIC0yNzAgLTkgMCAtMjcgMTA2IC0zNiAyMTUgLTIyCjI1NyA5NiA1ODEgMzE3IDg2NyA5NCAxMjAgMTA1IDEzOCA1MiA4MyAtMTMwIC0xMzcgLTIzNiAtMjg4IC0zMTQgLTQ0NyAtMjcKLTU0IC01MCAtMTAzIC01MyAtMTEwIC00IC0xMCAtOCAtMTAgLTE2IDIgLTEyIDE3IC0xNCA5IC0xMSAtMzQgMSAtMjAgLTggLTM4Ci0zMSAtNjIgbC0zMiAtMzMgNiAtMTkzIGM4IC0yNjQgMzcgLTQ1MyAxMTggLTc2OCA1NCAtMjExIDE4MiAtNTkxIDE4OSAtNTYyCjQgMTcgMjUgLTEzIDk4IC0xNDQgNTIgLTkxIDkxIC0xNzIgODggLTE3OSAtNCAtMTMgMTA3IC0xNzUgMTIwIC0xNzUgMiAwIC01CjE3IC0xNiAzNyAtMTEgMjEgLTIwIDQxIC0yMCA0NiAwIDQgMjcgLTEzIDYxIC0zOSAzNiAtMjcgMTMwIC03OCAyMjkgLTEyNAoxNzYgLTgxIDI3NCAtMTM1IDMwNCAtMTY5IDE4IC0yMCAxOCAtMjEgLTM1IC00NiBsLTU0IC0yNSA0NSA1IGM5NSAxMSA0MzYgMTcKNDYwIDggMjMgLTEwIDIyIC0xMSAtMjAgLTI2IGwtNDUgLTE1IDczIC0xIGM0NiAtMSA4MSAtNiA5NSAtMTYgMjAgLTEzIDMxCi0xMiA5NyA0IDQ4IDExIDg1IDE1IDEwMiAxMCA1OSAtMTYgMjkxIDYwIDQzNCAxNDQgMjA5IDEyMyAzNjYgMjg4IDQ1OCA0ODAKMzcgNzggNTkgMTU0IDE0MCA0ODcgMTMxIDU0MiAxNDggNjI0IDE3NiA4NTMgMzQgMjc1IC00IDY1NyAtNzQgNzU3IC0xOCAyNQotMTM4IDE5NCAtMjY2IDM3NSAtMzAwIDQyMyAtMzQwIDQ3NCAtMzk2IDUwMyAtNjUgMzMgLTE4MiA2MCAtMzE0IDcxIC0xOTAgMTgKLTIzOSAxNyAtMzE0IC0yeiBtLTUxIC01MDQgYzc3IC02MSAyMTcgLTIzMSA0MjAgLTUxNCAxODYgLTI1OSAxOTAgLTI2NiAyMTMKLTM1NCAxOCAtNjggMjUgLTEyNyAyOSAtMjQyIDkgLTI0OCAtMTggLTQxMCAtMTUxIC04OTYgLTc2IC0yNzkgLTg5IC0zMTYKLTEzNiAtNDAwIC0yOSAtNTAgLTY0IC0xMDcgLTc4IC0xMjUgLTI0IC0zMiAtODggLTcyIC0xMTMgLTcyIC03IDAgLTY0IDM0Ci0xMjYgNzYgLTM5MCAyNjAgLTY2MCA1NTYgLTc2MiA4MzkgLTQ4IDEzMyAtNjIgMjIzIC02MyAzOTMgMCAxMjMgNSAxNzIgMjMKMjU3IDIyIDEwMCAzOSAxMzQgMzkgODAgMCAtMzUgODYgLTI2MyA5NSAtMjUzIDIgMiAtMyAyNiAtMTEgNTQgLTIxIDcxIC0zMAoyMjIgLTIyIDM0MCA5IDExMSA0MyAyNDQgODggMzQyIDM1IDc2IDExNiAxOTUgMTY1IDI0MiAzMSAzMCAzNSA0MCAzNSA4NCAwCjU5IDcgNzEgMzcgNzMgMjYgMiAxMDMgNjEgMTAzIDc5IDAgNyA1IDE2IDExIDIwIDggNSAxMCAtMyA3IC0yNSAtNSAtMzIgNQotNDMgMTYgLTE2IDggMjMgNjggNTUgMTAyIDU1IDIwIDAgNDcgLTEzIDc5IC0zN3ogbS0xNDE5IC0xNjUzIGM1NyAtMjc5IDg5Ci00MDUgMTI5IC01MDUgMzAgLTc2IDcgLTQ2IC00NiA1NyAtODggMTc1IC0xNDMgNDE0IC0xNTQgNjc1IC02IDE0MiAtNSAxMzkKNzEgLTIyN3oiLz4KPHBhdGggZD0iTTY5MDAgMjg3NCBjLTI5IC0xMzggMzIgLTI0NCAyNDkgLTQzNCBsNzUgLTY1IC05MCAxMTEgYy0xMjMgMTU0Ci0xNTMgMjA4IC0xODYgMzMyIC0xNSA1NyAtMjkgMTA2IC0zMiAxMDkgLTIgMiAtMTAgLTIxIC0xNiAtNTN6Ii8+CjxwYXRoIGQ9Ik00MDM2IDQ4ODQgYy00IC0xMiAxIC0yNSAxNSAtMzggbDIxIC0yMSAtNiAzMCBjLTkgMzkgLTIyIDUxIC0zMCAyOXoiLz4KPHBhdGggZD0iTTQwNTcgNDYwMSBjLTMgLTE0IDAgLTIxIDkgLTIxIDE2IDAgMTggOSA1IDI4IC02IDEwIC0xMCA5IC0xNCAtN3oiLz4KPHBhdGggZD0iTTQwODAgNDMyMCBjMCAtMTEgNSAtMjAgMTAgLTIwIDYgMCAxMCA5IDEwIDIwIDAgMTEgLTQgMjAgLTEwIDIwIC01CjAgLTEwIC05IC0xMCAtMjB6Ii8+CjxwYXRoIGQ9Ik05NDc3IDQyMTMgYy00MSAtOTYgLTcwIC0xOTggLTUzIC0xODIgOCA4IDEwNiAyODIgMTAyIDI4NyAtMiAyIC0yNAotNDYgLTQ5IC0xMDV6Ii8+CjxwYXRoIGQ9Ik00MTQyIDQwMjggYzkgLTU3IDE4IC0xMjUgMTggLTE1MyAyIC05OSAxNiAtOTEgMzMgMjEgMTQgODUgMTUgMTE3CjYgMTQ4IC0xMCAzNyAtNDggODYgLTY2IDg2IC01IDAgLTEgLTQ2IDkgLTEwMnoiLz4KPHBhdGggZD0iTTQwNjQgMzkxOSBjMTAgLTQwIDExIC00MSAxNCAtMTUgMiAxNiAtMyAzNSAtMTEgNDMgLTEzIDEzIC0xMyAxMAotMyAtMjh6Ii8+CjxwYXRoIGQ9Ik05MzQ2IDM2OTUgYy02OCAtMTc5IC0xMzQgLTQ0OCAtMTU2IC02MzggLTE4IC0xNTMgLTcgLTQyNCAyNCAtNTg3CjI3IC0xNDIgOTAgLTM0MCAxMzYgLTQyNiAxNyAtMzMgMjggLTUwIDI0IC0zOSAtMTAyIDI5NSAtMTM5IDQ0MSAtMTU1IDYxOCAtNQo2MiAtMTUgMTQ5IC0yMSAxOTQgLTI0IDE3NSAwIDMwNiAxMjIgNjc4IDc0IDIyMyA4NyAyNzIgNzYgMjgzIC0xMSAxMSAtMTkgLTMKLTUwIC04M3oiLz4KPHBhdGggZD0iTTQxNTAgMzY1NSBjMCAtMTQgNSAtMjUgMTAgLTI1IDYgMCAxMCAxMSAxMCAyNSAwIDE0IC00IDI1IC0xMCAyNQotNSAwIC0xMCAtMTEgLTEwIC0yNXoiLz4KPHBhdGggZD0iTTQxMTYgMzQ3OCBjLTQgLTYyIC05IC0xNDkgLTExIC0xOTMgLTggLTEyOCAzIC03NCAyMCAxMDUgOSA5MSAxOAoxNzMgMjEgMTgzIDMgMTAgMCAxNyAtOSAxNyAtMTEgMCAtMTYgLTI0IC0yMSAtMTEyeiIvPgo8cGF0aCBkPSJNNDA3MCAzMDUzIGMxIC0xMCA4IC0yOSAxNiAtNDMgbDE1IC0yNSAtNSAyNSBjLTMgMTQgLTYgMzMgLTYgNDMgMAo5IC00IDE3IC0xMCAxNyAtNSAwIC0xMCAtOCAtMTAgLTE3eiIvPgo8cGF0aCBkPSJNMTI0NTUgMjQyMCBjMTkgLTggMTUzIC0xNCAxNDQgLTYgLTIgMiAtNDAgNiAtODQgOSAtNDggMyAtNzIgMiAtNjAKLTN6Ii8+CjxwYXRoIGQ9Ik00NjQwIDIyNjkgYzAgLTUgNSAtNyAxMCAtNCA2IDMgMTAgOCAxMCAxMSAwIDIgLTQgNCAtMTAgNCAtNSAwIC0xMAotNSAtMTAgLTExeiIvPgo8cGF0aCBkPSJNNjE3NyAxOTU4IGM1NCAtMTE3IDEzNyAtMjY4IDE0NyAtMjY4IDYgMCAtMTk0IDM5OSAtMjAzIDQwNCAtNSA0CjIwIC01OCA1NiAtMTM2eiIvPgo8cGF0aCBkPSJNOTQyNCAxODcwIGMxNSAtMjUgMzggLTY2IDUzIC05MyAxNCAtMjYgMjggLTQ1IDMxIC00MyA3IDcgLTY3IDEzOAotOTAgMTYxIC0xNyAxNiAtMTUgMTEgNiAtMjV6Ii8+CjxwYXRoIGQ9Ik05NTkwIDE1OTUgYzcgLTkgMTUgLTEzIDE3IC0xMSA3IDcgLTcgMjYgLTE5IDI2IC02IDAgLTYgLTYgMiAtMTV6Ii8+CjxwYXRoIGQ9Ik05NjYwIDE1MTUgYzAgLTIgOSAtOSAyMCAtMTUgMTYgLTkgMTggLTggMTQgNSAtNSAxMyAtMzQgMjIgLTM0IDEweiIvPgo8cGF0aCBkPSJNMjAwIDE0ODUgYzAgLTIgMTkgLTE0IDQzIC0yNSBsNDIgLTIxIC0zMCAyNiBjLTI3IDIyIC01NSAzMyAtNTUgMjB6Ii8+CjxwYXRoIGQ9Ik03NzAgMTQzMCBjMCAtNSA1IC0xMCAxMCAtMTAgNiAwIDEwIDUgMTAgMTAgMCA2IC00IDEwIC0xMCAxMCAtNSAwCi0xMCAtNCAtMTAgLTEweiIvPgo8cGF0aCBkPSJNNjcxMCAxNDEyIGMwIC01IDEyIC0xNCAyNyAtMjEgMjggLTEzIDI4IC0xMyA5IDggLTIwIDIyIC0zNiAyNyAtMzYKMTN6Ii8+CjxwYXRoIGQ9Ik05NzAgMTM5MCBjMCAtNSA1IC0xMCAxMCAtMTAgNiAwIDEwIDUgMTAgMTAgMCA2IC00IDEwIC0xMCAxMCAtNSAwCi0xMCAtNCAtMTAgLTEweiIvPgo8cGF0aCBkPSJNNTQ1MCAxMzQ1IGMwIC0yIDEwIC0xMCAyMyAtMTYgMjAgLTExIDIxIC0xMSA4IDQgLTEzIDE2IC0zMSAyMyAtMzEKMTJ6Ii8+CjxwYXRoIGQ9Ik03MjggMTIyMyBjNyAtMyAxNiAtMiAxOSAxIDQgMyAtMiA2IC0xMyA1IC0xMSAwIC0xNCAtMyAtNiAtNnoiLz4KPHBhdGggZD0iTTEwNDIwIDEyMDAgYzAgLTUgNSAtMTAgMTAgLTEwIDYgMCAxMCA1IDEwIDEwIDAgNiAtNCAxMCAtMTAgMTAgLTUKMCAtMTAgLTQgLTEwIC0xMHoiLz4KPHBhdGggZD0iTTEwODgwIDEyMDAgYzAgLTUgNSAtMTAgMTAgLTEwIDYgMCAxMCA1IDEwIDEwIDAgNiAtNCAxMCAtMTAgMTAgLTUKMCAtMTAgLTQgLTEwIC0xMHoiLz4KPHBhdGggZD0iTTM1MzMgMTE5MyBjMTUgLTIgMzcgLTIgNTAgMCAxMiAyIDAgNCAtMjggNCAtMjcgMCAtMzggLTIgLTIyIC00eiIvPgo8L2c+Cjwvc3ZnPgo=" />
                </div>
                <nav class="mt-6">
                    <div>
                        <a class="w-full font-thin text-gray-500 dark:text-gray-200 flex items-center p-4 my-2 transition-colors duration-200 justify-start hover:text-blue-500"
                            href="index.blade.php">
                            <span class="text-left">
                                <svg width="20" height="20" fill="currentColor" viewBox="0 0 2048 1792"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M1070 1178l306-564h-654l-306 564h654zm722-282q0 182-71 348t-191 286-286 191-348 71-348-71-286-191-191-286-71-348 71-348 191-286 286-191 348-71 348 71 286 191 191 286 71 348z">
                                    </path>
                                </svg>
                            </span>
                            <span class="mx-4  font-normal text-sm">
                                داشبورد
                            </span>
                        </a>


                        <a class="w-full font-thin text-gray-500 dark:text-gray-200 flex items-center p-4 my-2 transition-colors duration-200 justify-start hover:text-blue-500"
                            href="users.blade.php">
                            <span class="text-left">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                                </svg>
                            </span>
                            <span class="mx-4 text-sm font-normal">
                                کاربران
                            </span>
                        </a>

                        <a class="w-full font-thin text-blue-500 flex items-center p-4 my-2 transition-colors duration-200 justify-start bg-gradient-to-l from-white to-blue-100 border-l-4 border-blue-500 dark:from-gray-700 dark:to-gray-800 border-l-4 border-blue-500"
                            href="form.blade.php">
                            <span class="text-left">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path
                                        d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z" />
                                </svg>
                            </span>
                            <span class="mx-4 text-lg font-normal">
                                فرم ها
                            </span>
                        </a>


                        <a class="w-full font-thin text-gray-500 dark:text-gray-200 flex items-center p-4 my-2 transition-colors duration-200 justify-start hover:text-blue-500"
                            href="login.blade.php">
                            <span class="text-left">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M3 3a1 1 0 011 1v12a1 1 0 11-2 0V4a1 1 0 011-1zm7.707 3.293a1 1 0 010 1.414L9.414 9H17a1 1 0 110 2H9.414l1.293 1.293a1 1 0 01-1.414 1.414l-3-3a1 1 0 010-1.414l3-3a1 1 0 011.414 0z"
                                        clip-rule="evenodd" />
                                </svg>
                            </span>
                            <span class="mx-4 text-sm font-normal">
                                ورود
                            </span>
                        </a>

                        <a class="w-full font-thin text-gray-500 dark:text-gray-200 flex items-center p-4 my-2 transition-colors duration-200 justify-start hover:text-blue-500"
                            href="register.blade.php">
                            <span class="text-left">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path
                                        d="M8 9a3 3 0 100-6 3 3 0 000 6zM8 11a6 6 0 016 6H2a6 6 0 016-6zM16 7a1 1 0 10-2 0v1h-1a1 1 0 100 2h1v1a1 1 0 102 0v-1h1a1 1 0 100-2h-1V7z" />
                                </svg>
                            </span>
                            <span class="mx-4 text-sm font-normal">
                                ثبت نام
                            </span>
                        </a>
                    </div>
                </nav>
                <div class="absolute bottom-0 my-10">
                    <a class="text-gray-600 dark:text-gray-300 hover:text-gray-800 dark:hover:text-gray-100 transition-colors duration-200 flex items-center py-2 px-8"
                        href="https://github.com/aminesmkhani/aminpanel">
                        <svg width="20" xmlns="http://www.w3.org/2000/svg" class="text-blue-500 h-5 w-5"
                            viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="mx-4">
                            امین پنل
                        </span>
                    </a>
                </div>
            </div>
        </div>
        <!-- End Navbar  -->
        <div class="flex flex-col w-full pl-0 md:p-4 md:space-y-4">
            <!-- Header -->
            <header class="w-full shadow-lg bg-white dark:bg-gray-700 items-center h-16 rounded-2xl z-40">
                <div class="relative z-20 flex flex-col justify-center h-full px-3 mx-auto flex-center">
                    <div class="relative items-center pl-1 flex w-full lg:max-w-68 sm:pr-2 sm:ml-0">
                        <div class="container relative left-0 z-50 flex w-3/4 h-auto h-full">
                            <div class="relative flex items-center w-full lg:w-64 h-full group">
                                <div
                                    class="absolute z-50 flex items-center justify-center block w-auto h-10 p-3 pr-2 text-sm text-gray-500 uppercase cursor-pointer sm:hidden">
                                    <svg fill="none" class="relative w-5 h-5" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="2" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z">
                                        </path>
                                    </svg>
                                </div>
                                <svg class="absolute right-0 z-20 hidden w-4 h-4 mr-4 text-gray-500 pointer-events-none fill-current group-hover:text-gray-400 sm:block"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path
                                        d="M12.9 14.32a8 8 0 1 1 1.41-1.41l5.35 5.33-1.42 1.42-5.33-5.34zM8 14A6 6 0 1 0 8 2a6 6 0 0 0 0 12z">
                                    </path>
                                </svg>
                                <input type="text"
                                    class="block w-full py-1.5 pr-10 pl-4 leading-normal rounded-2xl focus:border-transparent focus:outline-none focus:ring-2 focus:ring-blue-500 ring-opacity-90 bg-gray-100 dark:bg-gray-800 text-gray-400 aa-input"
                                    placeholder="جستجو" />
                            </div>
                        </div>
                        <div class="relative p-1 flex items-center justify-end w-1/4 ml-5 mr-4 sm:mr-0 sm:right-auto">
                            <a href="#" class="block relative">
                                <img alt="profil" src="assets/images/user.png"
                                    class="mx-auto object-cover rounded-full h-10 w-10 " />
                            </a>
                        </div>
                    </div>
                </div>
            </header>
            <!-- Header -->

            <div class="overflow-auto h-screen pb-24 pt-2 pr-2 pl-2 md:pt-0 md:pr-0 md:pl-0">
                <div class="flex flex-col  flex-wrap sm:flex-row ">

                    <div class="container mx-auto px-4 sm:px-8 max-w-8xl">
                        <div class="py-8">
                            <div class="flex flex-row mb-1 sm:mb-0 justify-between w-full">
                                <h2 class="text-2xl leading-tight">
                                    فرم ها
                                </h2>
                            </div>

                            <div class="bg-white rounded-lg shadow sm:max-w-md sm:w-full sm:mx-auto sm:overflow-hidden">
                                <div class="px-4 py-8 sm:px-10">
                                    <div class="relative mt-6">
                                        <div class="absolute inset-0 flex items-center">
                                            <div class="w-full border-t border-gray-300">
                                            </div>
                                        </div>
                                        <div class="relative flex justify-center text-sm leading-5">
                                            <span class="px-2 text-gray-500 bg-white">
                                                فرم ثبت کاربر
                                            </span>
                                        </div>
                                    </div>
                                    <div class="mt-6">
                                        <div class="w-full space-y-10">
                                            <div class="w-full">
                                                <div class=" relative ">
                                                    <label for="email" class="text-gray-700">
                                                        ایمیل
                                                        <span class="text-red-500 required-dot">
                                                            *
                                                        </span>
                                                    </label>
                                                    <input type="email" id="search-form-price"
                                                        class="ring-red-500 ring-2 rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                                                        placeholder="ایمیل شما" />
                                                    <p class="absolute text-sm text-red-500 -bottom-6">
                                                        ایمیل نا معتبر
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="w-full">
                                                <div class=" relative ">
                                                    <label for="name" class="text-gray-700">
                                                        نام
                                                    </label>
                                                    <input type="text" id="name"
                                                        class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                                                        placeholder="نام" />
                                                </div>
                                            </div>
                                            <div class="w-full">
                                                <div class=" relative ">
                                                    <label for="lastname" class="text-gray-700">
                                                        فامیلی
                                                    </label>
                                                    <input type="text" id="lastname"
                                                        class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                                                        placeholder="نام خانوادگی" />
                                                </div>
                                            </div>
                                            <div>
                                                <span class="block w-full rounded-md shadow-sm">
                                                    <button type="button"
                                                        class="py-2 px-4  bg-indigo-600 hover:bg-indigo-700 focus:ring-indigo-500 focus:ring-offset-indigo-200 text-white w-full transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2  rounded-lg ">
                                                        ثبت
                                                    </button>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</body>

@endsection
