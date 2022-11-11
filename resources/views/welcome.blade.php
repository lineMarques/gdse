@vite(['resources/css/app.css', 'resources/js/app.js'])
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="./resources/js/app.js"></script>
    <title>Quick Start</title>
</head>
<body>
    <script>
        const geojsonObject = {
            "type": "FeatureCollection"
            , "name": "Redes_Estaduais_-_Ponto_em_Opera%C3%A7%C3%A3o%3A_2012"
            , "crs": {
                "type": "name"
                , "properties": {
                    "name": "urn:ogc:def:crs:OGC:1.3:CRS84"
                }
            }
            , "features": [{
                    "type": "Feature"
                    , "properties": {
                        "OBJECTID": 1
                        , "CODIGO_EST": "00MS13AB0019"
                        , "ANO": 2016
                        , "UF": "MS"
                        , "ENTIDADE_R": "IMASUL"
                        , "CORPO_DAGU": "Córrego Água Boa"
                        , "LATITUDE": -22.2316
                        , "LONGITUDE": -54.8412
                    }
                    , "geometry": {
                        "type": "Point"
                        , "coordinates": [-54.8412, -22.231599999338538]
                    }
                }
                , {
                    "type": "Feature"
                    , "properties": {
                        "OBJECTID": 2
                        , "CODIGO_EST": "00MS13AB2000"
                        , "ANO": 2016
                        , "UF": "MS"
                        , "ENTIDADE_R": "IMASUL"
                        , "CORPO_DAGU": "Córrego Água Boa"
                        , "LATITUDE": -22.3993
                        , "LONGITUDE": -54.7827
                    }
                    , "geometry": {
                        "type": "Point"
                        , "coordinates": [-54.7827, -22.399299999334577]
                    }
                }
                , {
                    "type": "Feature"
                    , "properties": {
                        "OBJECTID": 3
                        , "CODIGO_EST": "00MS13BL2024"
                        , "ANO": 2016
                        , "UF": "MS"
                        , "ENTIDADE_R": "IMASUL"
                        , "CORPO_DAGU": "Córrego do Baile"
                        , "LATITUDE": -22.489167
                        , "LONGITUDE": -53.326389
                    }
                    , "geometry": {
                        "type": "Point"
                        , "coordinates": [-53.326389, -22.489166999332507]
                    }
                }
                , {
                    "type": "Feature"
                    , "properties": {
                        "OBJECTID": 4
                        , "CODIGO_EST": "00MS13BL2048"
                        , "ANO": 2016
                        , "UF": "MS"
                        , "ENTIDADE_R": "IMASUL"
                        , "CORPO_DAGU": "Córrego Baile"
                        , "LATITUDE": -22.3058
                        , "LONGITUDE": -53.3958
                    }
                    , "geometry": {
                        "type": "Point"
                        , "coordinates": [-53.3958, -22.305799999336752]
                    }
                }
                , {
                    "type": "Feature"
                    , "properties": {
                        "OBJECTID": 5
                        , "CODIGO_EST": "00MS13BL2052"
                        , "ANO": 2016
                        , "UF": "MS"
                        , "ENTIDADE_R": "IMASUL"
                        , "CORPO_DAGU": "Córrego do Baile"
                        , "LATITUDE": -22.277778
                        , "LONGITUDE": -53.393028
                    }
                    , "geometry": {
                        "type": "Point"
                        , "coordinates": [-53.393028, -22.277777999337449]
                    }
                }
                , {
                    "type": "Feature"
                    , "properties": {
                        "OBJECTID": 6
                        , "CODIGO_EST": "00MS13BR2080"
                        , "ANO": 2016
                        , "UF": "MS"
                        , "ENTIDADE_R": "IMASUL"
                        , "CORPO_DAGU": "Rio Brilhante"
                        , "LATITUDE": -21.9313
                        , "LONGITUDE": -54.4946
                    }
                    , "geometry": {
                        "type": "Point"
                        , "coordinates": [-54.4946, -21.931299999345633]
                    }
                }
                , {
                    "type": "Feature"
                    , "properties": {
                        "OBJECTID": 7
                        , "CODIGO_EST": "00MS13BR2128"
                        , "ANO": 2016
                        , "UF": "MS"
                        , "ENTIDADE_R": "IMASUL"
                        , "CORPO_DAGU": "Rio Brilhante"
                        , "LATITUDE": -21.932972
                        , "LONGITUDE": -54.647
                    }
                    , "geometry": {
                        "type": "Point"
                        , "coordinates": [-54.647, -21.932971999345583]
                    }
                }
                , {
                    "type": "Feature"
                    , "properties": {
                        "OBJECTID": 8
                        , "CODIGO_EST": "00MS13BR2267"
                        , "ANO": 2016
                        , "UF": "MS"
                        , "ENTIDADE_R": "IMASUL"
                        , "CORPO_DAGU": "Rio Brilhante"
                        , "LATITUDE": -21.4832
                        , "LONGITUDE": -55.1592
                    }
                    , "geometry": {
                        "type": "Point"
                        , "coordinates": [-55.1592, -21.483199999356341]
                    }
                }
                , {
                    "type": "Feature"
                    , "properties": {
                        "OBJECTID": 9
                        , "CODIGO_EST": "00MS13DR2000"
                        , "ANO": 2016
                        , "UF": "MS"
                        , "ENTIDADE_R": "IMASUL"
                        , "CORPO_DAGU": "Rio Dourados"
                        , "LATITUDE": -21.979
                        , "LONGITUDE": -54.218306
                    }
                    , "geometry": {
                        "type": "Point"
                        , "coordinates": [-54.218306, -21.978999999344463]
                    }
                }
                , {
                    "type": "Feature"
                    , "properties": {
                        "OBJECTID": 10
                        , "CODIGO_EST": "00MS13DR2102"
                        , "ANO": 2016
                        , "UF": "MS"
                        , "ENTIDADE_R": "IMASUL"
                        , "CORPO_DAGU": "Rio Dourados"
                        , "LATITUDE": -22.355722
                        , "LONGITUDE": -54.521306
                    }
                    , "geometry": {
                        "type": "Point"
                        , "coordinates": [-54.521306, -22.355721999335628]
                    }
                }
                , {
                    "type": "Feature"
                    , "properties": {
                        "OBJECTID": 11
                        , "CODIGO_EST": "00MS13DR2106"
                        , "ANO": 2016
                        , "UF": "MS"
                        , "ENTIDADE_R": "IMASUL"
                        , "CORPO_DAGU": "Rio Dourados"
                        , "LATITUDE": -22.403278
                        , "LONGITUDE": -54.523583
                    }
                    , "geometry": {
                        "type": "Point"
                        , "coordinates": [-54.523583, -22.403277999334495]
                    }
                }
                , {
                    "type": "Feature"
                    , "properties": {
                        "OBJECTID": 12
                        , "CODIGO_EST": "00MS13DR2150"
                        , "ANO": 2016
                        , "UF": "MS"
                        , "ENTIDADE_R": "IMASUL"
                        , "CORPO_DAGU": "Rio Dourados"
                        , "LATITUDE": -22.4017
                        , "LONGITUDE": -54.7833
                    }
                    , "geometry": {
                        "type": "Point"
                        , "coordinates": [-54.7833, -22.401699999334543]
                    }
                }
                , {
                    "type": "Feature"
                    , "properties": {
                        "OBJECTID": 13
                        , "CODIGO_EST": "00MS13DR2153"
                        , "ANO": 2016
                        , "UF": "MS"
                        , "ENTIDADE_R": "IMASUL"
                        , "CORPO_DAGU": "Rio Dourados"
                        , "LATITUDE": -22.3981
                        , "LONGITUDE": -54.7933
                    }
                    , "geometry": {
                        "type": "Point"
                        , "coordinates": [-54.7933, -22.398099999334608]
                    }
                }
                , {
                    "type": "Feature"
                    , "properties": {
                        "OBJECTID": 14
                        , "CODIGO_EST": "00MS13DR2250"
                        , "ANO": 2016
                        , "UF": "MS"
                        , "ENTIDADE_R": "IMASUL"
                        , "CORPO_DAGU": "Rio Dourados"
                        , "LATITUDE": -22.213639
                        , "LONGITUDE": -55.327444
                    }
                    , "geometry": {
                        "type": "Point"
                        , "coordinates": [-55.327444, -22.213638999338947]
                    }
                }
                , {
                    "type": "Feature"
                    , "properties": {
                        "OBJECTID": 15
                        , "CODIGO_EST": "00MS13DR2252"
                        , "ANO": 2016
                        , "UF": "MS"
                        , "ENTIDADE_R": "IMASUL"
                        , "CORPO_DAGU": "Rio Dourados"
                        , "LATITUDE": -22.210556
                        , "LONGITUDE": -55.331278
                    }
                    , "geometry": {
                        "type": "Point"
                        , "coordinates": [-55.331278, -22.210555999339014]
                    }
                }
                , {
                    "type": "Feature"
                    , "properties": {
                        "OBJECTID": 16
                        , "CODIGO_EST": "00MS13DR2364"
                        , "ANO": 2016
                        , "UF": "MS"
                        , "ENTIDADE_R": "IMASUL"
                        , "CORPO_DAGU": "Rio Dourados"
                        , "LATITUDE": -22.146222
                        , "LONGITUDE": -55.868861
                    }
                    , "geometry": {
                        "type": "Point"
                        , "coordinates": [-55.868861, -22.146221999340558]
                    }
                }
            , ]
        }
        

    </script>
    <div id="map">
</body>
</html>
