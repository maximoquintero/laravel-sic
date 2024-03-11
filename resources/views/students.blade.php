@vite('resources/css/app.css')

@extends ('plantilla')
@section('titulo')
    Estudiantes
@endSection
@section('header')
    <h1>Lista de estudiantes</h1>
@endSection
@section('contenido')
    <table class="m-20 border rounded-lg overflow-hidden">
      <tr class="bg-blue-600 text-white">
        <td class="px-10"><b>Nombre Alumno</b></td>
        <td class="px-10"><b>Apellido</b></td>
        <td class="px-10"><b>Matricula</b></td>
        <td class="px-10"><b>Acciones</b></td>
      </tr>
    @foreach ($students as $student)
        <tr class="border">
            <td class="text-center">
                {{ $student->name_student}}
            </td>
            <td class="text-center">
                {{ $student->lastname_student}}
            </td>
            <td class="text-center">
                {{ $student->id_student}}
            </td>
            <td class="flex justify-center"><a class="" href="{{ route('students.show', $student->id) }}">
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACQAAAAkCAYAAADhAJiYAAAAAXNSR0IArs4c6QAAAndJREFUWEftl11SqzAUx8+BvrTiGm7dSbsIce6T7UqurkR9ci4uQlyJ3DWUlpfC0QOESUJCCJ2xOnMz0xdokt/5/oPwzRZ+Mx74GUDF7mU1v7xOz+G9nof2efKAABsiur+4vLn7aigFqMiTDQE8CIhzQPU9tPt7h4h/zgVlTOr9SCjONUBaMnxFtAwgaPJudszm89/ZlHBbq8wExRdWSLcIsAKAGmRgpUT0FsyqRx+4wbLXoaZY3O5JMSy3Y8CcfeiQJ6/QeMS4COCxfkH0DxB/YeM58VP2cJG4PDYIZINhiCAs74cs5vwyhdcFZQUywHCSdnlTH4yYEcCt9DxDgKd5FDdeAwAGIySu2s7LQwZ5VdnYnOILL6J4K8drbOX2gFqLOG/EyjAs1yI8Y6AwLK9M4dT3IsBW9iZf2AM65AkZstcLygbE52pQyrk9IP3PLZjIGx8ozq2UK24RxWvdwEOevIu808eT4iHZO6IaqAw5fFOgao5FFLvGU7aI4isBrQN15CK+RfG8PAFKuUxcqkfCCmSL7wlQPaD2LDa87aeqzDEltTG+U6BM8kXrbz1gV3xBPtQXSgcS4q/LF8K1rky9GmPdeT1zSkDpnd8m/nxGRzexfaEAQBk7n2MkNbUDY2NU2n2rr+Vn9RwifKoHPBLLXWNLGBrM+liRz3fKj7by5AEq79ctFyrRJt6snjH2IcPIsE5s239dz10fDk4PyRfUGgeqFSLaPKbwCJlRHYPN2A8HLyAFrnhewnHWCHyoVqyNmk6HmUnkT5YfLpef8n4M1GQPTQXraSKtOX45EBsioEYJtKmW++7j5mpSlWfx0BD8fyBXaD8A2/X6NJ6iJlwAAAAASUVORK5CYII="/>
                {{-- <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACQAAAAkCAYAAADhAJiYAAAAAXNSR0IArs4c6QAAAapJREFUWEft2E1OwkAUAOD3Sl0jSxNI8CSWm3AIWbgSVyaWO/QorScBQxOXtW7VPtM2DWX+OtMZsAmypDOdj/fe/IEwsA8OzAOXDXrPnuc/3lU8Kr4WN5OHnSg70giVnb89f2mc0gKS2WSVsP1qjL+tv8edDCUEpR9hDAiBMYYgmV6vFmpM81SM4kDp58sSCCNXmPI9ab7ZAtCcfyeP4kD7PFwjwGPVmSAhhFcd3Gy8WsvaNbUjRDFRVYII4Ek1kApaItqFK0bhbjq+v22/5ySgQwEfD3iM4jFVubO/sp2yPhE6nk31jGpHoXqOfiQqfucgHnOYUWxqZOl2FiE5xgzlBNSN4VN3sgi5xFjXkC1mn4UBu830TpktJs03EQG9setcL5ALDAAtRcuKMcga09ornYDSPCT13iZegZs+XQuvcYTUIDWmRJ0R1I05I0gPcyaQPuYkIJ3DmqqN8xr6B3WF9E8jZHLI14UiwV1zxdJbqbMwQA9i3QFs2lEBi87dnp2aNgMq+0ouldKrdHlWwRHNiVBwwbNkSq7bwgOa5VDW3S/77xid8A0uQr9elps0odwE5QAAAABJRU5ErkJggg=="/> --}}
            </a>
                <a class="" href="{{ route('students.edit', $student->id) }}">
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACQAAAAkCAYAAADhAJiYAAAAAXNSR0IArs4c6QAAAapJREFUWEft2E1OwkAUAOD3Sl0jSxNI8CSWm3AIWbgSVyaWO/QorScBQxOXtW7VPtM2DWX+OtMZsAmypDOdj/fe/IEwsA8OzAOXDXrPnuc/3lU8Kr4WN5OHnSg70giVnb89f2mc0gKS2WSVsP1qjL+tv8edDCUEpR9hDAiBMYYgmV6vFmpM81SM4kDp58sSCCNXmPI9ab7ZAtCcfyeP4kD7PFwjwGPVmSAhhFcd3Gy8WsvaNbUjRDFRVYII4Ek1kApaItqFK0bhbjq+v22/5ySgQwEfD3iM4jFVubO/sp2yPhE6nk31jGpHoXqOfiQqfucgHnOYUWxqZOl2FiE5xgzlBNSN4VN3sgi5xFjXkC1mn4UBu830TpktJs03EQG9setcL5ALDAAtRcuKMcga09ornYDSPCT13iZegZs+XQuvcYTUIDWmRJ0R1I05I0gPcyaQPuYkIJ3DmqqN8xr6B3WF9E8jZHLI14UiwV1zxdJbqbMwQA9i3QFs2lEBi87dnp2aNgMq+0ouldKrdHlWwRHNiVBwwbNkSq7bwgOa5VDW3S/77xid8A0uQr9elps0odwE5QAAAABJRU5ErkJggg=="/>
                    {{-- <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACQAAAAkCAYAAADhAJiYAAAAAXNSR0IArs4c6QAAAa1JREFUWEftl11SwjAQx3crzzKcAL2ItjehdxBnfFKenLHeob0J4EWsJ2Dqq07ipFKIySbpR8IAY56gSbO//rNfQTiygUfGA6cBtFk+X+HFKEcOsX8FsRR7MvaVTJKH+rc8SIWqdcb9g2imSwpKA/p8e5lxjnl4IABEnl7e3BdWhap19gQAj9tFi/HtXPz3Nlz7awq5XhhK5tr/fICEr6nn36hnmwuiULV6zQH5DAA0H7PNCWDvQJtlFkcRLCVf2kFJMPU0Y5BMkvlK9jvvQMRXikcL4DjdqvZrn2Mxju9SNQiCABmg9rYNMEGOzCK/VZnmvWAK1V+7d26Z05pMgwEZYBowI1QQIA2GYwHIP6SSUzs6VXa8A2lhLzmwYgwY+75WWwzvQH8ihYimxiBVyYNGma08CBXVhHiQKOtT+YMcWR+Q81GIKJ4mQcy5hk6Y2j6tWlhx44ii0XvLY7G1H84tqLRA3jo6XoOM7YeZCEvGeEpFYq+LopoAu7QfLtl6AQ1pP4IBGaEsvZALRsz3VojMKwNhvADtlOI4pVrWNqrIawYr1NWga/0/0Mkp9ANAq4c0CZ1/6AAAAABJRU5ErkJggg=="/> --}}
                </a></td>
        </tr>
    @endforeach
    </table>
    <div class="fixed right-1 top-20">
      {{$students->links()}}
  </div>
  <div class="fixed left-5 top-20">
    <button class="bg-blue-900 text-white p-5 rounded-xl">
        <a class="" href="{{ route('students.create') }}">Agregar</a>
    </button>
</div>
@endSection
@section('footer')
    @Derechos reservados
@endSection
