<?php

/**
  * @OA\Get(
  *      path="/v1/entities/data-pelayanan-ibuham",
  *      operationId="browseDataPelayananIbuham",
  *      tags={"data-pelayanan-ibuham"},
  *      summary="Browse Data Pelayanan Ibuham",
  *      description="Returns list of Data Pelayanan Ibuham",
  *      @OA\Response(response=200, description="Successful operation"),
  *      @OA\Response(response=400, description="Bad request"),
  *      @OA\Response(response=401, description="Unauthorized"),
  *      @OA\Response(response=402, description="Payment Required"),
  *      security={
  *          {"bearerAuth": {}}
  *      }
  * )
  *
  */

/**
  * @OA\Get(
  *      path="/v1/entities/data-pelayanan-ibuham/read?slug=data-pelayanan-ibuham&id={id}",
  *      operationId="readDataPelayananIbuham",
  *      tags={"data-pelayanan-ibuham"},
  *      summary="Get Data Pelayanan Ibuham based on id",
  *      description="Returns Data Pelayanan Ibuham based on id",
  *      @OA\Parameter(
  *          name="id",
  *          required=true,
  *          in="path",
  *          @OA\Schema(
  *              type="integer"
  *          )
  *      ),
  *      @OA\Response(response=200, description="Successful operation"),
  *      @OA\Response(response=400, description="Bad request"),
  *      @OA\Response(response=401, description="Unauthorized"),
  *      @OA\Response(response=402, description="Payment Required"),
  *      security={
  *          {"bearerAuth": {}}
  *      }
  * )
  *
  */

/**
  * @OA\Post(
  *      path="/v1/entities/data-pelayanan-ibuham/add",
  *      operationId="addDataPelayananIbuham",
  *      tags={"data-pelayanan-ibuham"},
  *      summary="Insert new Data Pelayanan Ibuham",
  *      description="Insert new Data Pelayanan Ibuham into database",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="data",
  *                     type="object",
  *                     example={"nama":"Abc", "alamat":"Abc", "tempatLahir":"Abc", "tglLahir":"Abc", "usia":"Abc", "beratBadan":"Abc", "tensi":"Abc", "lingkarLengan":"Abc"},
  *                 ),
  *             )
  *         )
  *      ),
  *      @OA\Response(response=200, description="Successful operation"),
  *      @OA\Response(response=400, description="Bad request"),
  *      @OA\Response(response=401, description="Unauthorized"),
  *      @OA\Response(response=402, description="Payment Required"),
  *      security={
  *          {"bearerAuth": {}}
  *      }
  * )
  *
  */

/**
  * @OA\Put(
  *      path="/v1/entities/data-pelayanan-ibuham/edit",
  *      operationId="editDataPelayananIbuham",
  *      tags={"data-pelayanan-ibuham"},
  *      summary="Edit an existing Data Pelayanan Ibuham",
  *      description="Edit an existing Data Pelayanan Ibuham",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="data",
  *                     type="object",
  *                     example={"nama":"Abc", "alamat":"Abc", "tempatLahir":"Abc", "tglLahir":"Abc", "usia":"Abc", "beratBadan":"Abc", "tensi":"Abc", "lingkarLengan":"Abc"},
  *                ),
  *             )
  *         )
  *     ),
  *      @OA\Response(response=200, description="Successful operation"),
  *      @OA\Response(response=400, description="Bad request"),
  *      @OA\Response(response=401, description="Unauthorized"),
  *      @OA\Response(response=402, description="Payment Required"),
  *      security={
  *          {"bearerAuth": {}}
  *      }
  * )
  *
  */

/**
  * @OA\Delete(
  *      path="/v1/entities/data-pelayanan-ibuham/delete",
  *      operationId="deleteDataPelayananIbuham",
  *      tags={"data-pelayanan-ibuham"},
  *      summary="Delete one record of Data Pelayanan Ibuham",
  *      description="Delete one record of Data Pelayanan Ibuham",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="slug",
  *                     example="data-pelayanan-ibuham",
  *                     type="string"
  *                 ),
  *                 @OA\Property(
  *                     property="data",
  *                     type="array",
  *                     @OA\Items(
  *                         type="object",
  *                         @OA\Property(type="string", property="field", default="id"),
  *                         @OA\Property(type="integer", property="value", example="123"),
  *                     ),
  *                ),
  *             )
  *         )
  *     ),
  *      @OA\Response(response=200, description="Successful operation"),
  *      @OA\Response(response=400, description="Bad request"),
  *      @OA\Response(response=401, description="Unauthorized"),
  *      @OA\Response(response=402, description="Payment Required"),
  *      security={
  *          {"bearerAuth": {}}
  *      }
  * )
  *
  */

/**
  * @OA\Delete(
  *      path="/v1/entities/data-pelayanan-ibuham/delete-multiple",
  *      operationId="deleteMultipleDataPelayananIbuham",
  *      tags={"data-pelayanan-ibuham"},
  *      summary="Delete multiple record of Data Pelayanan Ibuham",
  *      description="Delete multiple record of Data Pelayanan Ibuham",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="slug",
  *                     example="data-pelayanan-ibuham",
  *                     type="string"
  *                 ),
  *                 @OA\Property(
  *                     property="data",
  *                     type="array",
  *                     @OA\Items(
  *                         type="object",
  *                         @OA\Property(type="string", property="field", default="id"),
  *                         @OA\Property(type="{}", property="value", example="123,123"),
  *                     ),
  *                ),
  *             )
  *         )
  *     ),
  *      @OA\Response(response=200, description="Successful operation"),
  *      @OA\Response(response=400, description="Bad request"),
  *      @OA\Response(response=401, description="Unauthorized"),
  *      @OA\Response(response=402, description="Payment Required"),
  *      security={
  *          {"bearerAuth": {}}
  *      }
  * )
  *
  */

/**
  * @OA\Put(
  *      path="/v1/entities/data-pelayanan-ibuham/sort",
  *      operationId="sortDataPelayananIbuham",
  *      tags={"data-pelayanan-ibuham"},
  *      summary="Sort existing Data Pelayanan Ibuham",
  *      description="Sort existing Data Pelayanan Ibuham",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="slug",
  *                     example="data-pelayanan-ibuham",
  *                     type="string"
  *                 ),
  *                 @OA\Property(
  *                     property="data",
  *                     type="array",
  *                     example={{"id":"123", "nama":"Abc", "alamat":"Abc", "tempatLahir":"Abc", "tglLahir":"Abc", "usia":"Abc", "beratBadan":"Abc", "tensi":"Abc", "lingkarLengan":"Abc", "createdAt":"2021-01-01T00:00:00.000Z", "updatedAt":"2021-01-01T00:00:00.000Z"}, {"id":"123", "nama":"Abc", "alamat":"Abc", "tempatLahir":"Abc", "tglLahir":"Abc", "usia":"Abc", "beratBadan":"Abc", "tensi":"Abc", "lingkarLengan":"Abc", "createdAt":"2021-01-01T00:00:00.000Z", "updatedAt":"2021-01-01T00:00:00.000Z"}},
  *                     @OA\Items(
  *                         type="object",
  *                         @OA\Property(type="integer", property="id"), 
  *                         @OA\Property(type="string", property="nama"), 
  *                         @OA\Property(type="string", property="alamat"), 
  *                         @OA\Property(type="string", property="tempatLahir"), 
  *                         @OA\Property(type="string", property="tglLahir"), 
  *                         @OA\Property(type="string", property="usia"), 
  *                         @OA\Property(type="string", property="beratBadan"), 
  *                         @OA\Property(type="string", property="tensi"), 
  *                         @OA\Property(type="string", property="lingkarLengan"), 
  *                         @OA\Property(type="string", property="createdAt"), 
  *                         @OA\Property(type="string", property="updatedAt"),
  *                     ),
  *                ),
  *             )
  *         )
  *     ),
  *      @OA\Response(response=200, description="Successful operation"),
  *      @OA\Response(response=400, description="Bad request"),
  *      @OA\Response(response=401, description="Unauthorized"),
  *      @OA\Response(response=402, description="Payment Required"),
  *      security={
  *          {"bearerAuth": {}}
  *      }
  * )
  *
  */