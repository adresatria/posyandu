<?php

/**
  * @OA\Get(
  *      path="/v1/entities/data-penimbangan-balita",
  *      operationId="browseDataPenimbanganBalita",
  *      tags={"data-penimbangan-balita"},
  *      summary="Browse Data Penimbangan Balita",
  *      description="Returns list of Data Penimbangan Balita",
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
  *      path="/v1/entities/data-penimbangan-balita/read?slug=data-penimbangan-balita&id={id}",
  *      operationId="readDataPenimbanganBalita",
  *      tags={"data-penimbangan-balita"},
  *      summary="Get Data Penimbangan Balita based on id",
  *      description="Returns Data Penimbangan Balita based on id",
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
  *      path="/v1/entities/data-penimbangan-balita/add",
  *      operationId="addDataPenimbanganBalita",
  *      tags={"data-penimbangan-balita"},
  *      summary="Insert new Data Penimbangan Balita",
  *      description="Insert new Data Penimbangan Balita into database",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="data",
  *                     type="object",
  *                     example={"nama":"Abc", "namaIbu":"Abc", "alamat":"Abc", "jenisKelamin":"Abc", "tglLahir":"Abc", "tempatLahir":"Abc", "beratBadan":"Abc", "tinggiBadan":"Abc", "tglPenimbangan":"Abc"},
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
  *      path="/v1/entities/data-penimbangan-balita/edit",
  *      operationId="editDataPenimbanganBalita",
  *      tags={"data-penimbangan-balita"},
  *      summary="Edit an existing Data Penimbangan Balita",
  *      description="Edit an existing Data Penimbangan Balita",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="data",
  *                     type="object",
  *                     example={"nama":"Abc", "namaIbu":"Abc", "alamat":"Abc", "jenisKelamin":"Abc", "tglLahir":"Abc", "tempatLahir":"Abc", "beratBadan":"Abc", "tinggiBadan":"Abc", "tglPenimbangan":"Abc"},
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
  *      path="/v1/entities/data-penimbangan-balita/delete",
  *      operationId="deleteDataPenimbanganBalita",
  *      tags={"data-penimbangan-balita"},
  *      summary="Delete one record of Data Penimbangan Balita",
  *      description="Delete one record of Data Penimbangan Balita",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="slug",
  *                     example="data-penimbangan-balita",
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
  *      path="/v1/entities/data-penimbangan-balita/delete-multiple",
  *      operationId="deleteMultipleDataPenimbanganBalita",
  *      tags={"data-penimbangan-balita"},
  *      summary="Delete multiple record of Data Penimbangan Balita",
  *      description="Delete multiple record of Data Penimbangan Balita",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="slug",
  *                     example="data-penimbangan-balita",
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
  *      path="/v1/entities/data-penimbangan-balita/sort",
  *      operationId="sortDataPenimbanganBalita",
  *      tags={"data-penimbangan-balita"},
  *      summary="Sort existing Data Penimbangan Balita",
  *      description="Sort existing Data Penimbangan Balita",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="slug",
  *                     example="data-penimbangan-balita",
  *                     type="string"
  *                 ),
  *                 @OA\Property(
  *                     property="data",
  *                     type="array",
  *                     example={{"id":"123", "nama":"Abc", "namaIbu":"Abc", "alamat":"Abc", "jenisKelamin":"Abc", "tglLahir":"Abc", "tempatLahir":"Abc", "beratBadan":"Abc", "tinggiBadan":"Abc", "tglPenimbangan":"Abc", "createdAt":"2021-01-01T00:00:00.000Z", "updatedAt":"2021-01-01T00:00:00.000Z"}, {"id":"123", "nama":"Abc", "namaIbu":"Abc", "alamat":"Abc", "jenisKelamin":"Abc", "tglLahir":"Abc", "tempatLahir":"Abc", "beratBadan":"Abc", "tinggiBadan":"Abc", "tglPenimbangan":"Abc", "createdAt":"2021-01-01T00:00:00.000Z", "updatedAt":"2021-01-01T00:00:00.000Z"}},
  *                     @OA\Items(
  *                         type="object",
  *                         @OA\Property(type="integer", property="id"), 
  *                         @OA\Property(type="string", property="nama"), 
  *                         @OA\Property(type="string", property="namaIbu"), 
  *                         @OA\Property(type="string", property="alamat"), 
  *                         @OA\Property(type="string", property="jenisKelamin"), 
  *                         @OA\Property(type="string", property="tglLahir"), 
  *                         @OA\Property(type="string", property="tempatLahir"), 
  *                         @OA\Property(type="string", property="beratBadan"), 
  *                         @OA\Property(type="string", property="tinggiBadan"), 
  *                         @OA\Property(type="string", property="tglPenimbangan"), 
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