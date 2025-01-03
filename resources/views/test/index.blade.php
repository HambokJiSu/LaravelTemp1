<!DOCTYPE html>
<html>
<head>
    <title>Tabulator Grid 예제</title>
    
    <!-- Tabulator CSS -->
    <link href="https://unpkg.com/tabulator-tables@5.5.0/dist/css/tabulator.min.css" rel="stylesheet">
    
    <!-- Tabulator JavaScript -->
    <script type="text/javascript" src="https://unpkg.com/tabulator-tables@5.5.0/dist/js/tabulator.min.js"></script>
</head>
<body>
    <h1>테스트 데이터 그리드</h1>
    
    <!-- 그리드가 표시될 div -->
    <div id="test-table"></div>

    <script type="text/javascript">
        // Tabulator 테이블 초기화
        var table = new Tabulator("#test-table", {
            ajaxURL: "{{ route('test.data') }}", // 데이터를 가져올 URL
            layout: "fitColumns",
            pagination: true,
            paginationSize: 10,
            columns: [
                {title: "컬럼1", field: "COL1", sorter: "string"},
                {title: "컬럼2", field: "COL2", sorter: "string"},
                {title: "컬럼3", field: "COL3", sorter: "string"}
            ]
        });
    </script>
</body>
</html>