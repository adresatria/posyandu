<?php

/**
  * @OA\Get(
  *      path="/v1/entities/laporan-keg-posyandu",
  *      operationId="browseLaporanKegPosyandu",
  *      tags={"laporan-keg-posyandu"},
  *      summary="Browse Laporan Keg Posyandu",
  *      description="Returns list of Laporan Keg Posyandu",
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
  *      path="/v1/entities/laporan-keg-posyandu/read?slug=laporan-keg-posyandu&id={id}",
  *      operationId="readLaporanKegPosyandu",
  *      tags={"laporan-keg-posyandu"},
  *      summary="Get Laporan Keg Posyandu based on id",
  *      description="Returns Laporan Keg Posyandu based on id",
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
  *      path="/v1/entities/laporan-keg-posyandu/add",
  *      operationId="addLaporanKegPosyandu",
  *      tags={"laporan-keg-posyandu"},
  *      summary="Insert new Laporan Keg Posyandu",
  *      description="Insert new Laporan Keg Posyandu into database",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="data",
  *                     type="object",
  *                     example={"bulan":"Abc", "jmlBalita":"Abc", "jmlBalitaYgDitimbang":"Abc", "jmlBalitaDiimunisasi":"Abc", "jmlBalitaDapatVitamin":"Abc", "jmlIbuHamil":"Abc", "jmlIbuHamilUmurKurangDari20thDanLebih35th":"Abc"},
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
  *      path="/v1/entities/laporan-keg-posyandu/edit",
  *      operationId="editLaporanKegPosyandu",
  *      tags={"laporan-keg-posyandu"},
  *      summary="Edit an existing Laporan Keg Posyandu",
  *      description="Edit an existing Laporan Keg Posyandu",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="data",
  *                     type="object",
  *                     example={"bulan":"Abc", "jmlBalita":"Abc", "jmlBalitaYgDitimbang":"Abc", "jmlBalitaDiimunisasi":"Abc", "jmlBalitaDapatVitamin":"Abc", "jmlIbuHamil":"Abc", "jmlIbuHamilUmurKurangDari20thDanLebih35th":"Abc"},
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
  *      path="/v1/entities/laporan-keg-posyandu/delete",
  *      operationId="deleteLaporanKegPosyandu",
  *      tags={"laporan-keg-posyandu"},
  *      summary="Delete one record of Laporan Keg Posyandu",
  *      description="Delete one record of Laporan Keg Posyandu",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="slug",
  *                     example="laporan-keg-posyandu",
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
  *      path="/v1/entities/laporan-keg-posyandu/delete-multiple",
  *      operationId="deleteMultipleLaporanKegPosyandu",
  *      tags={"laporan-keg-posyandu"},
  *      summary="Delete multiple record of Laporan Keg Posyandu",
  *      description="Delete multiple record of Laporan Keg Posyandu",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="slug",
  *                     example="laporan-keg-posyandu",
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
  *      path="/v1/entities/laporan-keg-posyandu/sort",
  *      operationId="sortLaporanKegPosyandu",
  *      tags={"laporan-keg-posyandu"},
  *      summary="Sort existing Laporan Keg Posyandu",
  *      description="Sort existing Laporan Keg Posyandu",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="slug",
  *                     example="laporan-keg-posyandu",
  *                     type="string"
  *                 ),
  *                 @OA\Property(
  *                     property="data",
  *                     type="array",
  *                     example={{"id":"123", "bulan":"Abc", "jmlBalita":"Abc", "jmlBalitaYgDitimbang":"Abc", "jmlBalitaDiimunisasi":"Abc", "jmlBalitaDapatVitamin":"Abc", "jmlIbuHamil":"Abc", "jmlIbuHamilUmurKurangDari20thDanLebih35th":"Abc", "createdAt":"2021-01-01T00:00:00.000Z", "updatedAt":"2021-01-01T00:00:00.000Z"}, {"id":"123", "bulan":"Abc", "jmlBalita":"Abc", "jmlBalitaYgDitimbang":"Abc", "jmlBalitaDiimunisasi":"Abc", "jmlBalitaDapatVitamin":"Abc", "jmlIbuHamil":"Abc", "jmlIbuHamilUmurKurangDari20thDanLebih35th":"Abc", "createdAt":"2021-01-01T00:00:00.000Z", "updatedAt":"2021-01-01T00:00:00.000Z"}},
  *                     @OA\Items(
  *                         type="object",
  *                         @OA\Property(type="integer", property="id"), 
  *                         @OA\Property(type="string", property="bulan"), 
  *                         @OA\Property(type="string", property="jmlBalita"), 
  *                         @OA\Property(type="string", property="jmlBalitaYgDitimbang"), 
  *                         @OA\Property(type="string", property="jmlBalitaDiimunisasi"), 
  *                         @OA\Property(type="string", property="jmlBalitaDapatVitamin"), 
  *                         @OA\Property(type="string", property="jmlIbuHamil"), 
  *                         @OA\Property(type="string", property="jmlIbuHamilUmurKurangDari20thDanLebih35th"), 
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